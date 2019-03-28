<?php

namespace App;


class Poi extends Model
{
    //$poi->tour;
    public function tours()
    {
    	return $this->belongsToMany(Tour::class);
    }

}

