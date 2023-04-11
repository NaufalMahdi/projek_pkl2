<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function index(Request $request)
    {
        $name = 'Sekilas Tentang SMP Negeri 1 Jember';
        return view('landing', compact('name'));
    }
}
