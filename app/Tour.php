<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

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
    
    public function stops()
    {
        return $this->hasMany(Stop::class);
    }
}

