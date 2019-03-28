<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    protected $fillable = ['name','description', 'nodes', 'total_distance', 'walk_time'];
    
    protected $stops = ['description','audio','vid','img'];
}
