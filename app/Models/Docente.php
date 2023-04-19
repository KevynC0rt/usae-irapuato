<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docents';
    use HasFactory;
    protected $fillable=[
        'nombre',
        'imagen',
    ];
}
