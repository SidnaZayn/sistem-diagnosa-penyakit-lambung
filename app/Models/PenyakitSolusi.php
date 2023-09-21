<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyakitSolusi extends Model
{
    protected $table = 'penyakit_solusi';

    public function hasilAnalisa()
    {
        return $this->hasMany(HasilAnalisa::class);
    }
    use HasFactory;
}
