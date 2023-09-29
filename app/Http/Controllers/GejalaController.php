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
        $fuzzyClass = new FuzzyMembershipFunctions($request->pasien_id, 0);

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

        $req = [
            $request->heart_burn,
            $request->regurgitasi,
            $request->mual,
            $request->muntah,
            $request->sendawa,
            $request->perut_kembung,
            $request->nyeri_ulu_hati,
            $request->nyeri_ulu_hati_bila_makan,
            $request->muntah_darah,
            $request->feses_berdarah_berlendir
        ];
        
        $gejala = $fuzzyClass->fuzzification($req);

        if ($gejala) {
            return response()->json($gejala);
        } else {
            return redirect()->back()->with(['error' => 'Internal Error, silahkan isi ulang']);
        }
    }
}
