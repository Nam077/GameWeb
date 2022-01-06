<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameScore extends Model
{
    protected $guarded =[];
    public function getAllScorebyGame(){
        return $this -> hasMany(Game::class, 'game_id');
    }
    public function nameGame(){
        return $this -> hasOne(Game::class, 'id','game_id');
    }
    public function nameUser(){
        return $this -> hasOne(User::class,'id','user_id');
    }
    public function getGameScore(){
        if($id = request()->id){
            return $this ->where('game_id',$id);
        }
    }
}
