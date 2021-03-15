<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Musique;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
            'titre'=>$request->input('titre'),
            'description'=>$request->input('description'),
            'tags'=>$request->input('tags'),
            'genre'=>$request->input('genre'),
            'sous_genre'=>$request->input('sous_genre'),
            'yt_link'=>$request->input('yt_link'),
            'audio_link'=>$request->input('audio_link'),
            'studio_enregistrement'=>$request->input('studio_enregistrement'),
            'annee_enregistrement'=>$request->input('annee_enregistrement'),
            'realisateur'=>$request->input('realisateur'),
            'auteur'=>$request->input('auteur'),
            'version'=>$request->input('version'),
            'pochette'=>$request->input('pochette'),
            'couverture'=>$request->input('couverture'),
            'slug'=>Str::slug($request->input('titre'), '-'),
        );

        //dd($data);
        Musique::create($data);
        return $this->index();
    }
}
