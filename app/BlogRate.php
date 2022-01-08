<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogRate extends Model
{
    //
    protected $guarded =[];

    public function rateBlog(){
        return $this ->hasOne(Blog::class,'id','blog_id');
    }
    public function rateUser(){
        return $this ->hasOne(User::class,'id','user_id');
    }
    public function getRate(){
        if($id = request()->id){
            return $this ->where('blog_id',$id);
        }
    }
}
