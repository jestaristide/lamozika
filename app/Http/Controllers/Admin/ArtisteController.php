<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ArtisteController extends Controller
{
    public function index () {
        return Inertia::render('Admin/Artiste');
    }

    public function create () {
        return Inertia::render('Admin/ArtisteAdd');
    }

    public function store () {
        dd(request());
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
