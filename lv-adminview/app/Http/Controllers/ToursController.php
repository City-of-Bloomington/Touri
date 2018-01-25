<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tour;

class ToursController extends Controller
{
    public function index()

    {
        $tours = Tour::latest()->get();

    	return view('tours.index', compact('tours'));
    }

    public function show(Tour $tour)

    {

    	return view('tours.show', compact('tour'));
    }

    public function create()
    {

    	return view('tours.create');
    }

    public function store()
    {
        $this->validate(request(),[

            'name' => 'required',
            'description' => 'required',
            'nodes' => 'required',
            'total_distance' => 'required',
            'walk_time' => 'required'

        ]);

    	//Create a new blog using the request data
    	//$blog = new Blog;

    	//$blog->title = request('title');
    	//$blog->body = request('body');

    	//Save it to the database
    	//$blog->save();

    	Tour::create(request(['name', 'description','nodes','total_distance','walk_time']));


    	//And then redirect to the home page
    	return redirect('/');


    }


}

