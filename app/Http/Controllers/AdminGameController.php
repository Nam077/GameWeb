<?php

namespace App\Http\Controllers;

use App\Category;
use App\Components\Recusive;
use App\Game;
use App\GameImage;
use App\GameScore;
use App\GameTag;
use App\Http\Requests\GameAddRequest;
use App\Tag;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AdminGameController extends Controller
{
    private $category;
    private $game;
    use StorageImageTrait;

    public function __construct(Category $category, Game $game, GameImage $gameImage, Tag $tag, GameTag $gameTag, GameScore $gameScore)
    {
        $this->game = $game;
        $this->tag = $tag;
        $this->gameTag = $gameTag;
        $this->gameImage = $gameImage;
        $this->category = $category;
        $this->gameScore = $gameScore;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $games = $this ->game->search() ->paginate(5);
        return view('Admin.Game.index',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = $this ->tag ->all();
        $htmlOption = $this->getCategory($parentId = '');
        return view('Admin.game.add', compact('htmlOption','tag'));
    }

    public function getCategory($parentId)
    {
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(GameAddRequest $request)
    {

        try {
            DB::beginTransaction();
            $dataGameCreate = [
                'name' => $request->name,
                'tutorial' => $request->tutorial,
                'content' => $request->contents,
                'category_id' => $request->category_id,
                'user_id' => auth()->id(),
                'path' => $request->path
            ];
            $dataUploadImage = $this->storageTraitUpload($request, 'feature_image_path', 'Game');
            if (!empty($dataUploadImage)) {
                $dataGameCreate['feature_image_path'] = $dataUploadImage['file_path'];
                $dataGameCreate['feature_image_name'] = $dataUploadImage['file_name'];
            }
            $game = $this->game->create($dataGameCreate);
            /////////////////////////////
            if ($request->hasFile('image_path')) {
                foreach ($request->image_path as $fileItem) {
                    $filedataGameImagetail = $this->storageTraitUploadMultiple($fileItem, 'Game');
                    $game->images()->create([
                        'image_path' => $filedataGameImagetail['file_path'],
                        'image_name' => $filedataGameImagetail['file_name'],
                    ]);

                }

            }
            /////////////////////////Tag
            if(!empty($request->game_tag)){
                foreach ($request->game_tag as $tagItem) {
                    $tagInstance = $this->tag->firstOrCreate([
                        'name' => $tagItem
                    ]);
                    $tagIds [] = $tagInstance->id;
                }
            }
            $game->tags()->attach($tagIds);
            DB::commit();
            return redirect()->route('games.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Messges' . $exception->getMessage() . 'Line' . $exception->getLine());

        };


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Game $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Game $game
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = $this->game->find($id);
        $htmlOption = $this->getCategory($game->category_id);
        $tag = $this ->tag->all();
        $tag_game = $game ->tags;
        return view('Admin.Game.edit',compact('game', 'htmlOption','tag','tag_game' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Game $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $dataGameUpdate = [
                'name' => $request->name,
                'tutorial' => $request->tutorial,
                'content' => $request->contents,
                'category_id' => $request->category_id,
                'user_id' => auth()->id(),
                'path' => $request->path
            ];
            $dataUploadImage = $this->storageTraitUpload($request, 'feature_image_path', 'Game');
            if (!empty($dataUploadImage)) {
                $dataGameUpdate['feature_image_path'] = $dataUploadImage['file_path'];
                $dataGameUpdate['feature_image_name'] = $dataUploadImage['file_name'];
            }
            $this->game->find($id)->update($dataGameUpdate);
            $game = $this ->game ->find($id);
            /////////////////////////////
            if ($request->hasFile('image_path')) {
                $this ->gameImage ->where('game_id',$id)->delete();
                foreach ($request->image_path as $fileItem) {
                    $filedataGameImagetail = $this->storageTraitUploadMultiple($fileItem, 'Game');
                    $game->images()->create([
                        'image_path' => $filedataGameImagetail['file_path'],
                        'image_name' => $filedataGameImagetail['file_name'],
                    ]);

                }

            }
            /////////////////////////Tag
            if(!empty($request->game_tag)){
                foreach ($request->game_tag as $tagItem) {
                    $tagInstance = $this->tag->firstOrCreate(['name' => $tagItem]);
                    $tagIds [] = $tagInstance->id;
                }
            }
            $game->tags()->sync($tagIds);
            DB::commit();
            return redirect()->route('games.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Messges' . $exception->getMessage() . 'Line' . $exception->getLine());

        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Game $game
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this ->game->find($id)->delete();
            $this ->gameImage ->where('game_id',$id)->delete();
            $this ->gameTag ->where('game_id',$id)->delete();
            $this ->gameScore ->where('game_id',$id)->delete();
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
