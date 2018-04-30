<?php

namespace App\Http\Controllers;

use App\Tour;
use App\Poi;

class PoisController extends Controller
{
    public function store(Tour $tour)
    {
    	$this->validate(request(), ['description'=>'required|min:5']);

    	$tour->addPoi(request('description'));
    	/*Poi::create([
    		'description' => request('description'),
    		'tour_id' => $tour->id
    	]);*/

    	return back();
    }

    public function index(Poi $poi)
    {
        $poi = Poi::orderBY('sort', 'DESC')->paginate(10);
        return view('layout.show', compact('pois'))->with('no', 1);
    }

