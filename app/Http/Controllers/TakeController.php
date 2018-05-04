<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tour;
use App\Poi;

class TakeController extends Controller
{
    public function index()

    {
        $tours = Tour::latest()->get();

    	return view('take_tour.index', compact('tours'));
    }

    public function show(Tour $tour)

    {

    	return view('layouts.show', compact('tour'));
    }

    public function grid()
    {

    	return view('take_tour.master');
    }
}