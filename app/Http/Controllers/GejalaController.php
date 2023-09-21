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
            'heart_burn' => 'required',
            'regurgitasi' => 'required',
            'mual' => 'required',
            'muntah' => 'required',
            'sendawa' => 'required',
            'perut_kembung' => 'required',
            'nyeri_ulu_hati' => 'required',
            'nyeri_ulu_hati_bila_makan' => 'required',
            'muntah_darah' => 'required',
            'feses_berdarah_berlendir' => 'required',
            'pasien_id' => 'required'
        ]);

        $gejala = Gejala::create([
            'heart_burn' => $request->heart_burn,
            'regurgitasi' => $request->regurgitasi,
            'mual' => $request->mual,
            'muntah' => $request->muntah,
            'sendawa' => $request->sendawa,
            'perut_kembung' => $request->perut_kembung,
            'nyeri_ulu_hati' => $request->nyeri_ulu_hati,
            'nyeri_ulu_hati_bila_makan' => $request->nyeri_ulu_hati_bila_makan,
            'c' => $request->muntah_darah,
            'feses_berdarah_berlendir' => $request->feses_berdarah_berlendir,
            'pasien_id' => $request->pasien_id,
        ]);

        if ($gejala) {
            return response()->json($gejala);
        } else {
            return redirect()->back()->with(['error' => 'Internal Error, silahkan isi ulang']);
        }
    }
}