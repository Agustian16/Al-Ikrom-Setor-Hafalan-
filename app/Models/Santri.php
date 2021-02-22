<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $table = 'table_santri';
    protected $fillable = ['nis', 'nama', 'tingkat', 'id_rayon', 'alamat', 'nama_ayah', 'nama_ibu', 'no_telp']; 
}
