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
}
