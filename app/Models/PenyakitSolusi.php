<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyakitSolusi extends Model
{
    protected $table = 'penyakit_solusi';

    protected $fillable = [
        'nama_penyakit',
        'definisi',
        'solusi',
        'tindak_lanjut',
        'obat',
        'priority',
        'created_at',
        'updated_at',
    ];

    public function hasilAnalisa()
    {
        return $this->hasMany(HasilAnalisa::class);
    }
    use HasFactory;
}
