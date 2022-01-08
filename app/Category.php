<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use SoftDeletes;
    protected $fillable = ['name','parent_id','slug'];
    public function scopeSearch($query){
        if($key = request()->key){
            $query = $query -> where('name','like', '%'.$key.'%');
        }
        return $query;
    }
    public function  gameall(){
        return $this ->hasMany(Game::class, 'category_id', 'id');
    }
    public function getCategoryBySlug(){
        if($slug = request()->slug){
            return $this ->where('slug', $slug);
        }
    }
}
