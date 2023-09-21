<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Http\Controllers\FuzzyMembershipFunctions;
use App\Models\HasilAnalisa;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasilAnalisaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function analisa(Request $request)
    {
        $gejala_id = $request->query('gejala');

        if (!$gejala_id) {
            return redirect()->back()->with('error', 'id gejala tidak ditemukan');
        }

        $gejala = Gejala::where('id', $gejala_id)->first();

        $fuzzyClass = new FuzzyMembershipFunctions($gejala->pasien_id, $gejala);

        $gejala = [
            'heart_burn' => $fuzzyClass->fuzzification($gejala->heart_burn),
            'regurgitasi' => $fuzzyClass->fuzzification($gejala->regurgitasi),
            'mual' => $fuzzyClass->fuzzification($gejala->mual),
            'muntah' => $fuzzyClass->fuzzification($gejala->muntah),
            'sendawa' => $fuzzyClass->fuzzification($gejala->sendawa),
            'perut_kembung' => $fuzzyClass->fuzzification($gejala->perut_kembung),
            'nyeri_ulu_hati' => $fuzzyClass->fuzzification($gejala->nyeri_ulu_hati),
            'nyeri_ulu_hati_bila_makan' => $fuzzyClass->fuzzification($gejala->nyeri_ulu_hati_bila_makan),
            'muntah_darah' => $fuzzyClass->fuzzification($gejala->muntah_darah),
            'feses_berdarah_berlendir' => $fuzzyClass->fuzzification($gejala->feses_berdarah_berlendir),
        ];

        $allHasil = $fuzzyClass->mamdaniInference();

        return view('main.diagnosa.analisa', ['hasil' => $allHasil, 'gejala' => $gejala]);
    }

    function getHistoryByPasienId()
    {

        $allPasiens = Pasien::all()->where('user_id', Auth::user()->id);
        $history = [];

        foreach ($allPasiens as $pasien) {
            $hasilAnalisa = HasilAnalisa::where('pasien_id', $pasien->id)->with('penyakit_solusi')->with('pasien')->get();
            foreach ($hasilAnalisa as $hasil) {
                array_push($history, $hasil);
            }
        }

        return view('main.history.index', ['histories' => $history]);
    }
}