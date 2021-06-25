<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        $naslov = 'Dobrodosli u galeriju';
        return view('stranice.onama', compact('naslov'));
    }

    public function pocetnastr(){
        $naslov = 'Dobrodosli na pocetnu stranu';
        return view('stranice.pocetna')->with('naslovpocstrane', $naslov);
    }

    /*public function service(){
        $podaci = array('naslovservisa' => 'Nasi servisi', 'nizservisa'=>['Web Dizajn', 'IT', 'Multimediji']);
        return view('stranice.servisi')->with($podaci);
    }*/
}
