<?php

namespace App\Http\Controllers;

use App\Models\HasilAnalisa;
use App\Models\PenyakitSolusi;

/*
 * 0= TIDAK
 * 1 = BIASA
 * 2-3 = SEDANG
 * 4-5 = DOMINAN
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
        if ($value == 0)
            return 0; //TIDAK
        if ($value == 1)
            return 1; //BIASA
        if ($value >= 2 && $value <= 3)
            return 2; //SEDANG
        if ($value >= 4 && $value <= 5)
            return 3; //DOMINAN
        else
            return false;
    }

    /**
     * RULES
     *
     *GERD
     *IF heart_burn >= 3 && regurgitasi >= 5 && mual >= 1 && nyeri_ulu_hati >= 1
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

    public function mamdaniInference()
    {
        //GERD
        if ($this->gejala->heart_burn >= 3 && $this->gejala->mual >= 5 && $this->gejala->muntah >= 5 && $this->gejala->sendawa >= 5) {

            $diagnosaValue = ($this->gejala->heart_burn + $this->gejala->mual + $this->gejala->muntah + $this->gejala->sendawa) / 18 * 100;

            $this->createHasilAnalisa('gerd', $diagnosaValue);
        }

        //gastritis
        if ($this->gejala->nyeri_ulu_hati >= 3 && $this->gejala->mual >= 5 && $this->gejala->muntah >= 5 && $this->gejala->sendawa >= 5) {

            $diagnosaValue = ($this->gejala->nyeri_ulu_hati + $this->gejala->mual + $this->gejala->muntah + $this->gejala->sendawa) / 18 * 100;

            $this->createHasilAnalisa('gastritis', $diagnosaValue);
        }

        //dispepsia
        if ($this->gejala->perut_kembung >= 3 && $this->gejala->nyeri_ulu_hati >= 3) {
            
            $diagnosaValue = ($this->gejala->perut_kembung + $this->gejala->nyeri_ulu_hati) / 6 * 100;

            $this->createHasilAnalisa('dispepsia', $diagnosaValue);
        }

        //tukak lambung
        if ($this->gejala->nyeri_ulu_hati_bila_makan >= 5 && $this->gejala->perut_kembung >= 3 && $this->gejala->mual >= 3) {
            
            $diagnosaValue = ($this->gejala->nyeri_ulu_hati_bila_makan + $this->gejala->perut_kembung + $this->gejala->mual) / 11 * 100;

            $this->createHasilAnalisa('tukak lambung', $diagnosaValue);
        }

        //gastroparesis
        if ($this->gejala->perut_kembung >= 5 && $this->gejala->mual >= 3 && $this->gejala->muntah >= 3) {
            
            $diagnosaValue = ($this->gejala->perut_kembung + $this->gejala->mual + $this->gejala->muntah) / 11 * 100;

            $this->createHasilAnalisa('gastroparesis', $diagnosaValue);
        }

        //kanker lambung
        if ($this->gejala->perut_kembung >= 3 && $this->gejala->nyeri_ulu_hati >= 3 || $this->gejala->muntah_darah >= 1 || $this->gejala->feses_berdarah_berlendir >= 1) {
            
            $diagnosaValue = ($this->gejala->perut_kembung + $this->gejala->nyeri_ulu_hati + $this->gejala->muntah_darah + $this->gejala->feses_berdarah_berlendir) / 8 * 100;

            $this->createHasilAnalisa('kanker lambung', $diagnosaValue);
        }

        return true;
    }
    
}