<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createPasien(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelamin' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'email' => 'required'
        ]);

        $pasien = Pasien::create([
            'nama' => $request->nama,
            'kelamin' => $request->kelamin,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'tanggal' => Carbon::now()->toDateTimeString(),
            'user_id' => Auth::user()->id
        ]);

        if ($pasien) {
            return redirect()->route('diagnosa.keluhan', ['pasienid' => $pasien->id]);
        } else {
            return redirect()->route('re')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}