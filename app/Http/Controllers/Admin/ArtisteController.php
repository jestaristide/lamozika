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
    public function index () {
        $artistes = Artiste::all();
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
        unset($data['rs']);
        
        $nArtiste = Artiste::create($data);

        foreach($reseaux_sociaux as $r) {
            RSociaux::create(['artiste_id'=>$nArtiste->id, 'type'=>$r['type'], 'url'=>$r['url']]);
        }

        return $this->index();
    }

    public function show () {

    }

    public function edit () {
        return Inertia::render('Admin/ArtisteEdit');
    }

    public function update () {

    }

    public function destroy () {

    }


}
