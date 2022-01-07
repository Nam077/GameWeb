<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameRate extends Model
{
    protected $guarded =[];
    public function rateGame(){
        return $this ->hasOne(Game::class,'id','game_id');
    }
    public function rateUser(){
        return $this ->hasOne(User::class,'id','user_id');
    }
    public function getRate(){
        if($id = request()->id){
            return $this ->where('game_id',$id);
        }
    }
}
