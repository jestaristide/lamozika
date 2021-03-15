<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musique extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'slug',
        'description',
        'tags',
        'genre',
        'sous_genre',
        'yt_link',
        'audio_link',
        'studio_enregistrement',
        'annee_enregistrement',
        'auteur',
        'compositeur',
        'pochette',
        'couverture'
    ];
}
