<?php

namespace App\Http\Controllers;

use App\Game;
use App\GameScore;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminGameScoreController extends Controller
{
    private $gameScore;
    private $game;
    private $user;

    public function __construct(GameScore $gameScore, Game $game, User $user)
    {
        $this->gameScore = $gameScore;
        $this->game = $game;
        $this->user = $user;
    }

    /**{
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

       $GameScore = $this->gameScore->getGameScore()->paginate(10);
       return  view('Admin.GameScore.index',['gameScore' => $GameScore]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\GameScore $gameScore
     * @return \Illuminate\Http\Response
     */
    public function show(GameScore $gameScore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\GameScore $gameScore
     * @return \Illuminate\Http\Response
     */
    public function edit(GameScore $gameScore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\GameScore $gameScore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GameScore $gameScore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\GameScore $gameScore
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $this ->gameScore->find($id)->delete();
            return  response() -> json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        } catch (\Exception $exception){
            Log::error('Messges' . $exception->getMessage() . 'Line' . $exception->getLine());
            return  response() -> json([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }
    }
}
