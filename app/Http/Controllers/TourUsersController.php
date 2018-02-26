<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tour;

class TourUsersController extends Controller
{
    public function index()

    {
        $tours = Tour::latest()->get();

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

}
