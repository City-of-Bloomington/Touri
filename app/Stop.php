<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
    
}

$stop = Tour::find(1);