<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murobi extends Model
{
    use HasFactory;
    protected $table = 'table_murobi';
    protected $fillable = ['id', 'nama_murobi', 'username', 'password'];
}
