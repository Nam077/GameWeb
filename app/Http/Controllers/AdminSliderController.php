<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderAddRequest;
use App\Slider;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminSliderController extends Controller
{
    use StorageImageTrait;
    private $slider;
    public function __construct(Slider $slider)
    {
        $this ->slider = $slider;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $slider = $this->slider->search()->paginate(5);
        return view('Admin.Slider.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.slider.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderAddRequest $request)
    {
        try {
            $dataSliderInsert = [
                'name' => $request ->name,
                'description' => $request ->description,
            ];
            $dataUploadImage = $this->storageTraitUpload($request, 'image_path', 'Game');
            if (!empty($dataUploadImage)) {
                $dataSliderInsert['image_path'] = $dataUploadImage['file_path'];
                $dataSliderInsert['image_name'] = $dataUploadImage['file_name'];
            }
            $slider = $this->slider->create($dataSliderInsert);
            return redirect()->route('sliders.index');
        } catch (\Exception $exception){
            Log::error('Messges' . $exception->getMessage() . 'Line' . $exception->getLine());
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = $this ->slider->find($id);
        return view('Admin.Slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(SliderAddRequest $request, $id)
    {
        try {
            $dataSliderInsert = [
                'name' => $request ->name,
                'description' => $request ->description,
            ];
            $dataUploadImage = $this->storageTraitUpload($request, 'image_path', 'Game');
            if (!empty($dataUploadImage)) {
                $dataSliderInsert['image_path'] = $dataUploadImage['file_path'];
                $dataSliderInsert['image_name'] = $dataUploadImage['file_name'];
            }
            $slider = $this->slider->find($id)->update($dataSliderInsert);
            return redirect()->route('sliders.index');
        } catch (\Exception $exception){
            Log::error('Messges' . $exception->getMessage() . 'Line' . $exception->getLine());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $this ->slider->find($id)->delete();
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
