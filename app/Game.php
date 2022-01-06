<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use SoftDeletes;
    protected $guarded =[];
    public function images(){
        return $this -> hasMany(GameImage::class, 'game_id');
    }
    public function tags(){
        return $this -> belongsToMany(Tag::class, 'game_tags','game_id','tag_id')->withTimestamps();
    }
    public function category(){
        return $this ->belongsTo(Category::class,'category_id');
    }
    public function gameImage(){
        return $this ->hasMany(GameImage::class,'game_id');
    }
    public function scopeSearch($query){
                if($key = request()->key){
                    $query = $query -> where('name','like', '%'.$key.'%');
                }
                return $query;
    }
    public function cat()
    {
        return $this ->hasOne(Category::class,'id', 'category_id' );
    }

}
