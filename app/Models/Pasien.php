<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama',
        'kelamin',
        'umur',
        'age',
        'user_id',
        'tanggal',
        'email',
        'alamat',
    ];
    public function users()
    {
        return $this->hasOne(User::class);
    }
    public function gejala()
    {
        return $this->hasMany(Gejala::class);
    }
    public function hasil_analisa()
    {
        return $this->hasMany(HasilAnalisa::class);
    }
}
