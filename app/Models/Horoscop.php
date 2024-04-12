<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Model d'un horòscop
class Horoscop extends Model
{
    use HasFactory;

    // Aquí és on especifiquem els camps que es poden omplir
    protected $fillable = [
        'date',     // Data
        'lang',     // Llenguatge
        'sign',     // Signe del zodíac
        'time',     // Hora
        'phrase',   // Frase segons signe de l'horòscop
    ];
}
