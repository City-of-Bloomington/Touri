<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;

class MapsController extends Controller
{
    public function index()

    {

    	return view('map.userTour', compact('tours'));
    }

    public function show()
    {

    	
    }
}
