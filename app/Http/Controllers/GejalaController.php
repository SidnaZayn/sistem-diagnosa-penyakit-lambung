<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class GejalaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $pasienid = $request->query('pasienid');

        $pasien = Pasien::where('id', $pasienid)->first();
        return view('main.diagnosa.keluhan', ['req' => $pasien]);
    }

    public function createGejala(Request $request)
    {
        $request->validate([
            'mual' => 'required',
            'muntah' => 'required',
            'muntah_asam' => 'required',
            'muntah_darah' => 'required',
            'panas' => 'required',
            'sakit_perut' => 'required',
            'buang_air_besar' => 'required',
            'mulut_luka' => 'required',
            'bibir_pecah' => 'required',
            'badan_lesu' => 'required',
            'pusing' => 'required',
            'kehilangan_nafsu' => 'required',
            'perut_nyeri' => 'required',
            'mulut_kering' => 'required',
            'sering_sendawa' => 'required',
            'sulit_tidur' => 'required',
            'bengkak_rahang' => 'required',
            'bau_nafas' => 'required',
            'feses_berdarah_berlendir' => 'required',
            'tidak_buang_besar' => 'required',
            'pasien_id' => 'required'
        ]);

        $gejala = Gejala::create([
            'mual' => $request->mual,
            'muntah' => $request->muntah,
            'muntah_asam' => $request->muntah_asam,
            'muntah_darah' => $request->muntah_darah,
            'panas' => $request->panas,
            'sakit_perut' => $request->sakit_perut,
            'buang_air_besar' => $request->buang_air_besar,
            'mulut_luka' => $request->mulut_luka,
            'bibir_pecah' => $request->bibir_pecah,
            'badan_lesu' => $request->badan_lesu,
            'pusing' => $request->pusing,
            'kehilangan_nafsu' => $request->kehilangan_nafsu,
            'perut_nyeri' => $request->perut_nyeri,
            'mulut_kering' => $request->mulut_kering,
            'sering_sendawa' => $request->sering_sendawa,
            'sulit_tidur' => $request->sulit_tidur,
            'bengkak_rahang' => $request->bengkak_rahang,
            'bau_nafas' => $request->bau_nafas,
            'feses_berdarah_berlendir' => $request->feses_berdarah_berlendir,
            'tidak_buang_besar' => $request->tidak_buang_besar,
            'pasien_id' => $request->pasien_id,
        ]);

        if ($gejala) {
            return response()->json($gejala);
        } else {
            return redirect()->back()->with(['error' => 'Internal Error, silahkan isi ulang']);
        }
    }
}