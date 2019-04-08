<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Poi extends Model
{
    //$poi->tour;
    public function tours()
    {
    	return $this->belongsToMany('Tour','Stop');
    }
}
