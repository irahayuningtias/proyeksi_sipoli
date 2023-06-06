<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    use HasFactory;
    protected $table='alat';
    protected $primaryKey = 'id_alat';
    
    protected $fillable = [
        'id_alat', 
        'id_staf',
        'nama_alat',
        'jenis_alat',
        'harga',
        'jumlah',
    ];

    public function alat()
    {
        return $this->hasMany(Users::class);
    }
}
