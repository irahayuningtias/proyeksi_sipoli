<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;
    protected $table = 'pemasukan';
    protected $primaryKey = 'id'; // make sure to rename the primary key column
    public $incrementing = true; // set to false if you want to disable auto-incrementing
    protected $keyType = 'int'; // or 'bigint' if you need larger integers
    
    protected $fillable = [
        'id_adminmk',
        'tgl_masuk',
        'jenis_pemasukan',
        'detail',
        'jlm_masuk',
    ];

    public function pemasukan()
    {
        return $this->hasMany(Users::class);
    }
}
