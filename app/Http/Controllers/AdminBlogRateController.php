<?php

namespace App\Http\Controllers;

use App\BlogRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminBlogRateController extends Controller
{
    public function __construct(BlogRate $blogRate)
    {
        $this->blogRate = $blogRate;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $blogRate = $this->blogRate->getRate()->paginate(5);
        return view('admin.blograte.index', compact('blogRate'));
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
     * @param \App\BlogRate $blogRate
     * @return \Illuminate\Http\Response
     */
    public function show(BlogRate $blogRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\BlogRate $blogRate
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogRate $blogRate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\BlogRate $blogRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogRate $blogRate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\BlogRate $blogRate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this ->blogRate->find($id)->delete();
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
