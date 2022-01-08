<?php

namespace App\Http\Controllers;

use App\GameRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminGameRateController extends Controller
{
    public function __construct(GameRate $gameRate)
    {

            $this->gameRate = $gameRate;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $gameRate = $this->gameRate->getRate()->paginate(5);
        return view('admin.gamerate.index', compact('gameRate'));

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GameRate  $gameRate
     * @return \Illuminate\Http\Response
     */
    public function show(GameRate $gameRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GameRate  $gameRate
     * @return \Illuminate\Http\Response
     */
    public function edit(GameRate $gameRate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GameRate  $gameRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GameRate $gameRate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GameRate  $gameRate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this ->gameRate->find($id)->delete();
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
