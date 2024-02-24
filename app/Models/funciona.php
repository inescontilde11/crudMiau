<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funciona extends Model
{
    use HasFactory;

    protected $table = "funcionas";
    protected $fillable=['dni', 'nombre', 'dir', 'email'];
}
