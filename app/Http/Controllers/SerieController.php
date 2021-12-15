<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index(){
        $serie=Serie::all();
        return view('liste',['séries'=>$serie]);
    }

    public function Recherchegenre($genre){
        $serie=Serie::where('genre'==$genre);
        return $serie;
    }
}
