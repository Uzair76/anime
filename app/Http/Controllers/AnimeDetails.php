<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeDetails extends Controller
{
    //
    public function index(){
        return view('/anime-details');
    }
}
