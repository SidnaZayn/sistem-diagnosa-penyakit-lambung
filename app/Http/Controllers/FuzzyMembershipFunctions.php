<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\HasilAnalisa;
use App\Models\PenyakitSolusi;
use Illuminate\Support\Carbon;

/*
 * 0 = BARU
 * 1 = SEDANG
 * 2 = LAMA
 * 3 = SANGAT LAMA
 **/

class FuzzyMembershipFunctions
{
    public $pasienId;
    public $gejala;

    public function __construct($pasienid, $gejala)
    {
        $this->pasienId = $pasienid;
        $this->gejala = $gejala;
    }

    // Fungsi Keanggotaan
    public function fuzzification($value)
    {
        $batasAtasBaru = 24;
        $batasBawahSedang = 18;
        $batasAtasSedang = 48;
        $batasBawahLama = 40;
        $batasAtasLama = 96;
        $batasBawahSangatLama = 88;

        $date_now = Carbon::now()->format('H');
        $date =  Carbon::now()->format('i');

        // $date_now = ($date > 30) ? $date_now + 1 : $date_now;
        $a = array();
        for ($i = 0; $i < count($value); $i++) {
            $value[$i] = $value[$i] * 24 + $date_now;
            array_push($a, $value[$i]);

            // Fuzzification
            if ($value[$i] < 18) {
                $value[$i] = 0;
            } elseif ($value[$i] > $batasBawahSedang && $value[$i] < $batasAtasBaru) {
                $baru = ($batasAtasBaru - $value[$i]) / ($batasAtasBaru - $batasBawahSedang);
                $sedang = ($value[$i] - $batasBawahSedang) / ($batasAtasBaru - $batasBawahSedang);
                $value[$i] = $baru > $sedang ? 0 : 1;
            } elseif ($value[$i] > $batasAtasBaru && $value[$i] < $batasBawahLama) {
                $value[$i] = 1;
            } elseif ($value[$i] > $batasBawahLama && $value[$i] < $batasAtasSedang) {
                $sedang = ($batasAtasSedang - $value[$i]) / ($batasAtasSedang - $batasBawahLama);
                $lama = ($value[$i] - $batasBawahLama) / ($batasAtasSedang - $batasBawahLama);
                $value[$i] = $sedang > $lama ? 1 : 2;
            } elseif ($value[$i] > $batasAtasSedang && $value[$i] < $batasBawahSangatLama) {
                $value[$i] = 2;
            } elseif ($value[$i] > $batasBawahSangatLama && $value[$i] < $batasAtasLama) {
                $lama = ($batasAtasLama - $value[$i]) / ($batasAtasLama - $batasBawahSangatLama);
                $sangatLama = ($value[$i] - $batasBawahSangatLama) / ($batasAtasLama - $batasBawahSangatLama);
                $value[$i] = $lama > $sangatLama ? 2 : 3;
            } elseif ($value[$i] > $batasBawahSangatLama) {
                $value[$i] = 3;
            } else {
                $value[$i] = "undefined";
            }
        }

        $gejala = Gejala::create([
            'heart_burn' => $value[0],
            'regurgitasi' => $value[1],
            'mual' => $value[2],
            'muntah' => $value[3],
            'sendawa' => $value[4],
            'perut_kembung' => $value[5],
            'nyeri_ulu_hati' => $value[6],
            'nyeri_ulu_hati_bila_makan' => $value[7],
            'muntah_darah' => $value[8],
            'feses_berdarah_berlendir' => $value[9],
            'pasien_id' => $this->pasienId,
        ]);

        return $gejala;
    }

    /**
     * RULES
     *
     *GERD
     *IF heart_burn >= 3 && regurgitasi >= 3 && mual >= 1 && nyeri_ulu_hati >= 1
     *
     * gastritis
     *IF nyeri ulu hati >=3 && mual == 5 && muntah >== 5 && sering-sendawa >== 5
     *
     * dispepsia
     *IF perut terasa penuh >== 3 && kembung >== 3 && nyeri ulu hati >==3
     *
     * tukak lambung
     *IF nyeri ulu hati bila diberi makanan >== 5 && kembung >== 3 && mual >== 3
     *
     * gastroparesis
     *IF kembung >==5 && mual >== 3 && muntah >== 3
     *
     * kanker lambung
     *IF kembung >== 3 && nyeri ulu hati >== 3 && muntah darah >== 1 && bab hitam >== 1
     */

    private function createHasilAnalisa($namaPenyakit, $diagnosaValue)
    {
        $penyakit = PenyakitSolusi::where('nama_penyakit', 'like', '%' . $namaPenyakit . '%')->first();

        HasilAnalisa::create([
            'pasien_id' => $this->pasienId,
            'penyakit_solusi_id' => $penyakit->id,
            'gejala_id' => $this->gejala->id,
            'diagnosa_value' => $diagnosaValue,
        ]);
    }

    public function rules()
    {
        //GERD
        if ($this->gejala->heart_burn >= 2 && $this->gejala->mual >= 3 && $this->gejala->muntah >= 3 && $this->gejala->sendawa >= 3) {

            $diagnosaValue = ($this->gejala->heart_burn + $this->gejala->mual + $this->gejala->muntah + $this->gejala->sendawa) / 18 * 100;

            $this->createHasilAnalisa('gerd', $diagnosaValue);
        }

        //gastritis
        if ($this->gejala->nyeri_ulu_hati >= 2 && $this->gejala->mual >= 3 && $this->gejala->muntah >= 3 && $this->gejala->sendawa >= 3) {

            $diagnosaValue = ($this->gejala->nyeri_ulu_hati + $this->gejala->mual + $this->gejala->muntah + $this->gejala->sendawa) / 18 * 100;

            $this->createHasilAnalisa('gastritis', $diagnosaValue);
        }

        //dispepsia
        if ($this->gejala->perut_kembung >= 2 && $this->gejala->nyeri_ulu_hati >= 2) {

            $diagnosaValue = ($this->gejala->perut_kembung + $this->gejala->nyeri_ulu_hati) / 6 * 100;

            $this->createHasilAnalisa('dispepsia', $diagnosaValue);
        }

        //tukak lambung
        if ($this->gejala->nyeri_ulu_hati_bila_makan >= 3 && $this->gejala->perut_kembung >= 2 && $this->gejala->mual >= 2) {

            $diagnosaValue = ($this->gejala->nyeri_ulu_hati_bila_makan + $this->gejala->perut_kembung + $this->gejala->mual) / 11 * 100;

            $this->createHasilAnalisa('tukak lambung', $diagnosaValue);
        }

        //gastroparesis
        if ($this->gejala->perut_kembung >= 3 && $this->gejala->mual >= 2 && $this->gejala->muntah >= 2) {

            $diagnosaValue = ($this->gejala->perut_kembung + $this->gejala->mual + $this->gejala->muntah) / 11 * 100;

            $this->createHasilAnalisa('gastroparesis', $diagnosaValue);
        }

        //kanker lambung
        if ($this->gejala->perut_kembung >= 2 && $this->gejala->nyeri_ulu_hati >= 2 || $this->gejala->muntah_darah >= 2 || $this->gejala->feses_berdarah_berlendir >= 2) {

            $diagnosaValue = ($this->gejala->perut_kembung + $this->gejala->nyeri_ulu_hati + $this->gejala->muntah_darah + $this->gejala->feses_berdarah_berlendir) / 8 * 100;

            $this->createHasilAnalisa('kanker lambung', $diagnosaValue);
        }

        return true;
    }
}
