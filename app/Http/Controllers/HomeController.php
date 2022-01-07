<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Game;
use App\GameRate;
use App\GameScore;
use App\Http\Requests\ContactAddRequest;
use App\Http\Requests\RegisterAddRequest;
use App\Slider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    public function __construct(User $user, Game $game, Category $category, Contact $contact, GameScore $gameScore, GameRate $gameRate,   Slider $slider)
    {
        $this->user = $user;
        $this->category = $category;
        $this->game = $game;
        $this->contact = $contact;
        $this->gameScore = $gameScore;
        $this->gameRate = $gameRate;
        $this->slider = $slider;
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $category = $this->category->all();
        $slider = $this->slider->paginate(4);
        $game = $this->game->paginate(4);
        $gameall = $this->game->all();
        return view('home', ['game' => $game, 'category' => $category, 'gameall' => $gameall, 'slider'=>$slider]);
    }

    public function gameCategory($slug)
    {
        $category = $this->category->all();
        $categoryget = $this->category->getCategoryBySlug()->first();
        $namecategory = $categoryget;
        if ($categoryget == null) {
            return redirect()->route('home.index');
        }
        $game = $categoryget->gameall()->get();
        $gameall = $this->game->all();
        return view('Home.gameByCategory', compact('game', 'namecategory', 'category', 'gameall'));
    }

    public function contact()
    {
        $gameall = $this->game->all();
        $category = $this->category->all();
        return view('Home.contact', ['category' => $category, 'gameall' => $gameall]);
    }

    public function postcontact(ContactAddRequest $request)
    {
        try {
            DB::beginTransaction();
            $user = $this->contact->create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'message' => $request->message,
            ]);
            DB::commit();
            return redirect()->route('home.contact');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Messges' . $exception->getMessage() . 'Line' . $exception->getLine());
        }
    }

    public function loginHome()
    {

        if (auth()->check()) {

            return redirect()->route('home.index');
        }
        $category = $this->category->all();
        $gameall = $this->game->all();
        return view('Home.login', ['category' => $category, 'gameall' => $gameall]);
    }

    public function postloginHome(Request $request)
    {
        $remeber_me = $request->has('remeber_me') ? true : false;
        if (auth()->attempt([
            'email' => $request->email,
            'password' => $request->password

        ], $remeber_me)) {
            return redirect()->route('home.index');
        } else  return redirect()->route('home.login');
    }

    public function registerHome()
    {

        $category = $this->category->all();
        $gameall = $this->game->all();
        return view('Home.register', ['category' => $category, 'gameall' => $gameall]);
    }

    public function postregisterHome(RegisterAddRequest $request)
    {
        try {
            DB::beginTransaction();
            $user = $this->user->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            DB::commit();
            return redirect()->route('home.login');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Messges' . $exception->getMessage() . 'Line' . $exception->getLine());
        }
    }

    public function logOut(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home.login');
    }

    public function allGame()
    {
        $gameall = $this->game->all();
        $category = $this->category->all();
        $game = $this->game->search()->paginate(16);
        return view('Home.allgame', compact('game', 'category', 'gameall'));
    }

    public function details($id)
    {
        $gameRate = $this->gameRate->getRate()->orderBy('rate', 'DESC')->get();
        $category = $this->category->all();
        $game = $this->game->find($id);
        $gameall = $this->game->all();
        return view('Home.details', compact('game', 'category', 'gameall','gameRate'));
    }

    public function slither()
    {
        $name = Auth::user()->name;
        $game = $this->game->where('id', request()->id)->first();
        return view('Game.slither', ['game' => $game], ['name' => $name]);
    }

    public function gold()
    {
        $game = $this->game->where('id', request()->id)->first();
        return view('Game.gold', ['game' => $game]);
    }

    public function sokoban()
    {
        return view('Game.sokoban');
    }

    public function number()
    {
        $game = $this->game->where('id', request()->id)->first();
        return view('Game.number', ['game' => $game]);
    }

    public function chess()
    {
        return view('Game.chess');
    }

    public function line98()
    {
        $game = $this->game->where('id', request()->id)->first();
        return view('Game.line98', ['game' => $game]);
    }

    public function fillmaze()
    {
        return view('Game.fillmaze');
    }

    public function pacman()
    {
        $game = $this->game->where('id', request()->id)->first();
        return view('Game.pacman', ['game' => $game]);
    }

    public function knight()
    {
        return view('Game.knight');
    }

    public function getScore()
    {
        return redirect()->route('home.index');
    }

    public function storeScore(Request $request)
    {
        if ($request->score == null) {
            return redirect()->route('home.index');
        }
        try {
            DB::beginTransaction();
            $gameScore = $this->gameScore->create([
                'game_id' => $request->game_id,
                'user_id' => Auth::user()->id,
                'score' => $request->score,
            ]);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Messges' . $exception->getMessage() . 'Line' . $exception->getLine());
        }
        return redirect()->back();
    }

    public function ranking($id)
    {
        $category = $this->category->all();
        $gameall = $this->game->all();
        $gameScore = $this->gameScore->getGameScore()->orderBy('score', 'DESC')->get();
        return view('home.ranking', ['gameScore' => $gameScore, 'gameall' => $gameall, 'category' => $category]);

    }

    public function saveRate(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $gameRate = $this->gameRate->create([
                'game_id' => $id,
                'user_id' => Auth::user()->id,
                'review' => $request->review,
                'rate' => $request->rate,
            ]);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception);
            Log::error('Messges' . $exception->getMessage() . 'Line' . $exception->getLine());
        }
        return redirect()->back();
    }
}
