<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenoms', 'date_naissance', 'origine', 'cin', 'adresse', 'nom_scene', 'description', 'slug'];

    public function rsociaux() {
        return $this->hasMany(RSociaux::class);
    }

}
