<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded =[];
    public function scopeSearch($query){
        if($key = request()->key){
            $query = $query -> where('name','like', '%'.$key.'%');
        }
        return $query;
    }
}
