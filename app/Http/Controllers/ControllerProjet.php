<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ControllerProjet extends Controller
{
    public function index(Request $request)
    {
        $projet = Projet::all();
        $lang = Projet::select('lang')
                        ->distinct()
                        ->get();
        return view('index',['projets'=>$projet, 'langs'=>$lang]);
    }
}
