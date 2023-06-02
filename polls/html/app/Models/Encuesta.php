<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;

    protected $table = 'encuestas';

    protected $fillable = [
        'pregunta',
        'r1',
        'r2',
        'r3',
        'r4'
    ];

}
