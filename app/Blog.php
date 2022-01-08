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
    public function nameUser(){
        return $this ->hasOne(User::class, 'id','user_id');
    }
    public function tags(){
        return $this -> belongsToMany(tagBlog::class, 'blog_tags','blog_id','tag_id')->withTimestamps();
    }
    public function getBlogBySlug(){
        if($slug = request()->slug){
            return $this ->where('slug', $slug);
        }
    }
    public function  getAllComments(){
        return $this ->hasMany(BlogRate::class, 'blog_id', 'id');
    }

}
