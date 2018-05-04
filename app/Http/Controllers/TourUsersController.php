<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tour;
use App\Poi;

class TourUsersController extends Controller
{
    public function index()

    {
        $tours = Tour::latest()->whereIN('id', [1, 2, 3])->get();

    	return view('layouts.index', compact('tours'));
    }

    public function show(Tour $tour)

    {

    	return view('layouts.show', compact('tour'));
    }

    public function feedback()
    {

    	return view('tours.feedback');
    }

    public function news()
    {
        return view('layouts.news');
    }

    public function about()
    {
        return view('layouts.about');
    }

}
