<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Musique;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MusiqueController extends Controller
{
    public function index() {
        $musiques = Musique::all();

        return Inertia::render('Admin/Musique/MusiqueListe', ['musiques'=>$musiques]);
    }

    public function create() {
        return Inertia::render('Admin/Musique/MusiqueAdd');
    }
    
    public function store(Request $request)
    {
        $data = array(
            'titre'=>$request->get('titre'),
            'description'=>$request->get('description'),
            'tags'=>$request->get('tags'),
            'genre'=>$request->get('genre'),
            'sous_genre'=>$request->get('sous_genre'),
            'yt_link'=>$request->get('yt_link'),
            'audio_link'=>$request->get('audio_link'),
            'studio_enregistrement'=>$request->get('studio_enregistrement'),
            'annee_enregistrement'=>$request->get('annee_enregistrement'),
            'realisateur'=>$request->get('realisateur'),
            'auteur'=>$request->get('auteur'),
            'version'=>$request->get('version'),
            'pochette'=>$request->get('pochette'),
            'couverture'=>$request->get('couverture'),
            'titre'=>$request->get('titre'),
        );

        return $this->index();
    }
}
