<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAnalisa extends Model
{
    use HasFactory;
    
    protected $table = 'hasil_analisa';

    protected $fillable = [
        'pasien_id',
        'penyakit_solusi_id',
        'gejala_id',
        'diagnosa_value',
    ];
    public function gejala()
    {
        return $this->belongsTo(Gejala::class);
    }
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
    public function penyakit_solusi()
    {
        return $this->belongsTo(PenyakitSolusi::class);
    }
}
