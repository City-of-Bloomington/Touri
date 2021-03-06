<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tour;
use App\Poi;
use App\Stop;

class ToursController extends Controller
{
    public function index()

    {
        $tours = Tour::latest()->get();

        $archives = Tour::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year', 'month')->orderByRaw('min(created_at) desc')->get()->toArray();

    	return view('admin.index', compact('tours', 'archives'));
    }

    public function show(Tour $tour)

    {

    	return view('admin.show', compact('tour'));
    }

    public function create()
    {

    	return view('admin.create');
    }

    public function edit(Tour $tour)

    {
        return view('admin.edit', compact('tour'));
    }

    public function store()
    {
        $this->validate(request(),[

            'name' => 'required',
            'description' => 'required',
            'total_distance' => 'required',
            'walk_time' => 'required',
            'img_url' => 'required',
            'node_desc' => 'required',
            'node_audio' => 'required',
            'node_video' => 'required',
            'node_img' => 'required'

        ]);

    	//Create a new blog using the request data
    	//$blog = new Blog;

    	//$blog->title = request('title');
    	//$blog->body = request('body');

    	//Save it to the database
    	//$blog->save();


        $tour = new Tour;

        $tour->name = request('name');
        $tour->description = request('description');
        $tour->total_distance = request('total_distance');
        $tour->walk_time = request('walk_time');
        $tour->img = request('img_url');
        $tour->save();

        $stop = new Stop;

        $stop->tour_id = $tour->id;
        $stop->pois_id = 1;
        $stop->description = request('node_desc');
        $stop->audio = request('node_audio');
        $stop->vid = request('node_video');
        $stop->img = request('node_img');
        $stop->save();

    	//old: Tour::create(request(['name', 'description','nodes','total_distance','walk_time']));


    	//And then redirect to the home page
    	return redirect('/admin');
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),[

            'name' => 'required',
            'description' => 'required',
            'nodes' => 'required',
            'total_distance' => 'required',
            'walk_time' => 'required',
            'img_url' => 'required'

        ]);

        $tour = Tour::find($id);
        $tour->name = $request->input('name');
        $tour->description = $request->input('description');
        $tour->nodes = $request->input('nodes');
        $tour->total_distance = $request->input('total_distance');
        $tour->walk_time = $request->input('walk_time');
        $tour->save();


        //And then redirect to the home page
        return redirect('/admin')->with('success', 'Tour Updated');
    }




    public function destroy($id)
    {
        Tour::find($id)->delete();
        return redirect('/admin')->with('success', 'Tour delete successfully');
    }


}

