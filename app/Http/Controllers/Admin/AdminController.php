<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function index () {
        return Inertia::render('Admin/Artiste');
    }

    public function show () {
        return Inertia::render('Admin/Artiste');
    }
}
