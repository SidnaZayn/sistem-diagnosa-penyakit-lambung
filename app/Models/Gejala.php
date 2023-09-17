<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $fillable = [
        'mual',
        'muntah',
        'muntah_asam',
        'muntah_darah',
        'panas',
        'sakit_perut',
        'buang_air_besar',
        'mulut_luka',
        'demam',
        'bibir_pecah',
        'badan_lesu',
        'pusing,',
        'kehilangan_nafsu',
        'perut_nyeri',
        'mulut_kering',
        'sering_sendawa',
        'sulit_tidur',
        'bengkak_rahang',
        'bau_nafas,',
        'feses_berdarah_berlendir',
        'tidak_buang_besar',
        'pasien_id',
    ];
    public function pasien()
    {
        return $this->hasOne(Pasien::class);
    }
    public function hasil_analisa()
    {
        return $this->hasMany(HasilAnalisa::class);
    }
}
