<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $primaryKey = 'id'; // make sure to rename the primary key column
    public $incrementing = true; // set to false if you want to disable auto-incrementing
    protected $keyType = 'int'; // or 'bigint' if you need larger integers
    
    protected $fillable = [
        'id_admin',
        'nama_pasien',
        'umur',
        'prodi',
        'jurusan',
    ];

    public function obat()
    {
        return $this->hasMany(Users::class);
    }
}
