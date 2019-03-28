<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    public function tours()
    {
        return $this->belongsToMany(Tour::class);
    }
}
