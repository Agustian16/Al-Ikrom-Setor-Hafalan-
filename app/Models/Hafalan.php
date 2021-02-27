<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hafalan extends Model
{
    use HasFactory;
    protected $table = 'hafalan_table';
    protected $fillable = ['id','nama_santri','surah_awal','ayat_awal','surah_akhir','ayat_akhir','keterangan','hasil']; 
}
