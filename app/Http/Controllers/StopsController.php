<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stop;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stops = Auth::tour()->with('Stops')->get()->toArray();
        return response()->json($stops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[

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

        $stop = new Stop;

        $stop->tour_id = 1;
        $stop->pois_id = 1;
        $stop->description = request('node_desc');
        $stop->audio = request('node_audio');
        $stop->vid = request('node_video');
        $stop->img = request('node_img');
        $stop->save();

    	//And then redirect to the home page
    	return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(),[

            'node_desc' => 'required',
            'node_audio' => 'required',
            'node_video' => 'required',
            'node_img' => 'required'

        ]);

        $stop = Stop::find($id);
        $stop->description = $request->input('node_desc');
        $stop->audio = $request->input('node_audio');
        $stop->vid = $request->input('node_video');
        $stop->img = $request->input('node_img');
        $stop->save();


        //And then redirect to the home page
        return redirect('/admin')->with('success', 'Stop Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
