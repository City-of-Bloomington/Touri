<?php

namespace App;


class Tour extends Model
{
    public function pois()
    {
    	return $this->hasMany(Poi::class);
    }

    public function addPoi($description)
    {

    	$this->pois()->create(compact('description'));
    	/*Poi::create([

    		'description' => $description,
    		'tour_id' => $this->id

    	]);*/
    }
}

