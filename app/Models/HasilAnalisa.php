<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAnalisa extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'pasien_id',
        'penyakit_solusi_id',
        'gejala_id',
    ];
    public function gejala()
    {
        return $this->hasOne(Gejala::class);
    }
    public function pasien()
    {
        return $this->hasOne(Pasien::class);
    }
    public function penyakit_solusi()
    {
        return $this->hasOne(PenyakitSolusi::class);
    }
}
