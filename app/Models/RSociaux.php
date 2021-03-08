<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RSociaux extends Model
{
    use HasFactory;
    protected $table = 'reseaux_sociaux';

    protected $fillable = ['artiste_id', 'type', 'url'];

    public function artiste() {
        return $this->belongsTo(Artiste::class);
    }
}
