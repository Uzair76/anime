<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeWatching extends Controller
{
    //
    public function index(){
        return view('/anime-watching');
    }

}
