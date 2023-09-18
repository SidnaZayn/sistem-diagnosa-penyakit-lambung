<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

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

        return view('main.diagnosa.analisa', ['gejala' => $gejala]);
    }
}