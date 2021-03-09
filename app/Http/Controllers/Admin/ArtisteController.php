<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Artiste;
use App\Models\RSociaux;
use Illuminate\Support\Str;

class ArtisteController extends Controller
{
    public function all() {
        return response()->json(Artiste::all());
    }
    public function index () {
        $artistes = Artiste::all();
        Inertia::share('artistess', $artistes);
        return Inertia::render('Admin/Artiste', ['artistes' =>$artistes]);
    }

    public function create () {
        return Inertia::render('Admin/ArtisteAdd');
    }

    public function store (Request $request) {
        $data = request()->all();

        $data['date_naissance'] = \Carbon\Carbon::parse($data['date_naissance']);
        $reseaux_sociaux = $data['rs'];
        $data['slug'] = Str::slug($data['nom_scene'], '-');


        $req = array (
            'nom'=>$data['nom'],
            'prenoms'=>$data['prenoms'],
            'date_naissance'=> $data['date_naissance'],
            'email'=>$data['email'],
            'tel'=>$data['tel'],
            'nom_scene'=>$data['nom_scene'],
            'slug'=>$data['slug'],
            'origine'=>$data['origine'],
            'specialite'=>$data['specialite'],
            'genre'=> $data['genre'],
            'description'=>$data['description']
        );

        //return $req;

        $nArtiste = Artiste::create($req);

        foreach($reseaux_sociaux as $r) {
            RSociaux::create(['artiste_id'=>$nArtiste->id, 'type'=>$r['type'], 'url'=>$r['url']]);
        }

        return $this->index();
    }

    public function show () {

    }

    public function edit ($id) {
        $artiste = Artiste::where('id','=', $id)->with('rsociaux')->first();
        return Inertia::render('Admin/ArtisteAdd', ['artiste'=>$artiste]);
    }

    public function update () {

    }

    public function destroy () {

    }


}
