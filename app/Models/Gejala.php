<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $table = 'gejala';

    protected $fillable = [
        'heart_burn',
        'regurgitasi',
        'mual',
        'muntah',
        'sendawa',
        'perut_kembung',
        'nyeri_ulu_hati',
        'nyeri_ulu_hati_bila_makan',
        'muntah_darah',
        'feses_berdarah_berlendir',
        'pasien_id'
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