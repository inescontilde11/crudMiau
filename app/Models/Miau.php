<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miau extends Model
{
    use HasFactory;

    protected $table = "producto";
    protected $fillable=['codigo', 'nombre', 'precio'];
}
