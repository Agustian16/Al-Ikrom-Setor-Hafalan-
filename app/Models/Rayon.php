<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    use HasFactory;
    protected $table = 'table_rayon';
    protected $fillable = ['id', 'nama_rayon', 'pembimbing_rayon']; 
}
