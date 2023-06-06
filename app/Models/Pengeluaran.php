<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'pengeluaran';
    protected $primaryKey = 'id'; // make sure to rename the primary key column
    public $incrementing = true; // set to false if you want to disable auto-incrementing
    protected $keyType = 'int'; // or 'bigint' if you need larger integers
    
    protected $fillable = [
        'id_adminkl',
        'tgl_keluar',
        'jenis_keluar',
        'detail_keluar',
        'jml_item',
        'jml_keluar',
    ];

    public function pengeluaran()
    {
        return $this->hasMany(Users::class);
    }
}
