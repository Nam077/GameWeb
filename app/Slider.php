<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;
    protected $guarded =[];
    public function scopeSearch($query){
        if($key = request()->key){
            $query = $query -> where('name','like', '%'.$key.'%');
        }
        return $query;
    }
}
