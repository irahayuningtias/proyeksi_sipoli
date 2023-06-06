<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekam extends Model
{
    use HasFactory;
    protected $table = 'rekam';
    protected $primaryKey = 'id'; // make sure to rename the primary key column
    public $incrementing = true; // set to false if you want to disable auto-incrementing
    protected $keyType = 'int'; // or 'bigint' if you need larger integers
    
    protected $fillable = [
        'id_adminrm',
        'id_ps',
        'tgl_periksa',
        'jenis_penyakit',
        'keluhan',
    ];

    public function rekam()
    {
        return $this->hasMany(Users::class);
    }
}
