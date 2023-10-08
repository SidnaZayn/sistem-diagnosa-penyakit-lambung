<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Http\Controllers\FuzzyMembershipFunctions;
use App\Models\HasilAnalisa;
use App\Models\Pasien;
use App\Models\PenyakitSolusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasilAnalisaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function test()
    {
        $fuzzyClass = new FuzzyMembershipFunctions(0, 0);

        $test = $fuzzyClass->fuzzification([2, 1, 1, 1, 1, 3]);
        return response($test);
    }

    public function analisa(Request $request)
    {
        $gejala_id = $request->query('gejala');

        if (!$gejala_id) {
            return redirect()->back()->with('error', 'id gejala tidak ditemukan');
        }

        $gejala = Gejala::where('id', $gejala_id)->first();

        $fuzzyClass = new FuzzyMembershipFunctions($gejala->pasien_id, $gejala);

        $fuzzyClass->rules();

        return response()->json($gejala);
    }

    function viewHasilAnalisa(Request $request)
    {
        $gejala_id = $request->query('gejala');

        if (!$gejala_id) {
            return redirect()->back()->with('error', 'id gejala tidak ditemukan');
        }
        // $allPenyakit = PenyakitSolusi::all();
        $allHasil = HasilAnalisa::where('gejala_id', $gejala_id)
            ->with('penyakit_solusi')
            ->join('penyakit_solusi', 'hasil_analisa.penyakit_solusi_id', '=', 'penyakit_solusi.id')
            ->orderBy('penyakit_solusi.priority', 'desc')
            ->first();
        // dd($allHasil);
        $gejala = Gejala::where('id', $gejala_id)->first();

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
