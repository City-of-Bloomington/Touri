<?php

namespace App;


class Poi extends Model
{
    //$poi->tour;
    public function tour()
    {
    	return $this->belongsTo(Tour::class);
    }
}
