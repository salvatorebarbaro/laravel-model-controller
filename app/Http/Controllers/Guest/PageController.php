<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
//gestore della logica nelle routes e dei pacchetti
class PageController extends Controller
{
    //questa è la funzione che gestisce le cose che vediamo in home
    public function index(){
        //abbiamo associato gli array di movie ad una variabile per potercela passare a schermo e abbiamo detto che li vogliamo tutti
        $movies = Movie::all();


        // dd($movies);
        //ci passiamo l'array a schermo
        return view('home',compact('movies'));
    }
}
