<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = 'obat';
    protected $primaryKey = 'id'; // make sure to rename the primary key column
    public $incrementing = true; // set to false if you want to disable auto-incrementing
    protected $keyType = 'int'; // or 'bigint' if you need larger integers
    
    protected $fillable = [
        'id_staffob',
        'nama_obat',
        'jenis_obat',
        'manfaat',
        'tgl_bl',
        'tgl_exp',
        'jml',
    ];

    public function obat()
    {
        return $this->hasMany(Users::class);
    }
}
