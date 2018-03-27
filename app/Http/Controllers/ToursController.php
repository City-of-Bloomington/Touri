<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tour;

class ToursController extends Controller
{
    public function index()

    {
        $tours = Tour::latest()->get();

    	return view('admin.index', compact('tours'));
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
            'nodes' => 'required',
            'total_distance' => 'required',
            'walk_time' => 'required',
            'img_url' => 'required'

        ]);

    	//Create a new blog using the request data
    	//$blog = new Blog;

    	//$blog->title = request('title');
    	//$blog->body = request('body');

    	//Save it to the database
    	//$blog->save();

    	Tour::create(request(['name', 'description','nodes','total_distance','walk_time']));


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

