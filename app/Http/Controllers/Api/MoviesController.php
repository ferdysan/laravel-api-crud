<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;

class MoviesController extends Controller
{
    public function index(){
      // recupero tutti i movie e ritorno un json 
      $movies= Movie::all();
      return response()->json($movies);
    }
}
