<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogTag;
use App\TagBlog;
use Illuminate\Http\Request;
use \App\Traits\StorageImageTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminBlogController extends Controller
{
    use StorageImageTrait;
    public function __construct(Blog $blog, BlogTag $blogTag, TagBlog $tagBlog)
    {
        $this->blog = $blog;
        $this->blogTag = $blogTag;
        $this->tagBlog = $tagBlog;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = $this->blog->search()->paginate(5);
        return view('admin.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = $this->tagBlog->all();
        return view('admin.blog.add',compact('tag'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $dataBlogCreate = [
                'name' => $request->name,
                'content' => $request->contents,
                'slug'=>str_slug($request->name),
                'user_id' => auth()->id(),
            ];
            $dataUploadImage = $this->storageTraitUpload($request, 'feature_image_path', 'Blog');
            if (!empty($dataUploadImage)) {
                $dataBlogCreate['image_path'] = $dataUploadImage['file_path'];
                $dataBlogCreate['image_name'] = $dataUploadImage['file_name'];
            }
            $Blog = $this->blog->create($dataBlogCreate);
            /////////////////////////////

            /////////////////////////Tag
            if(!empty($request->blog_tag)){
                foreach ($request->blog_tag as $tagItem) {
                    $tagInstance = $this->tagBlog->firstOrCreate([
                        'name' => $tagItem
                    ]);
                    $tagIds [] = $tagInstance->id;
                }
            }
            $Blog->tags()->attach($tagIds);
            DB::commit();
            return redirect()->route('blogs.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception);
            Log::error('Messges' . $exception->getMessage() . 'Line' . $exception->getLine());

        };
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = $this->blog->find($id);
        $tag_blog = $blog->tags;
        $tag = $this->tagBlog->all();
        return view('admin.blog.edit', compact('blog', 'tag_blog','tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $dataBlogCreate = [
                'name' => $request->name,
                'content' => $request->contents,
                'slug'=>str_slug($request->name),
                'user_id' => auth()->id(),
            ];
            if($request->hasFile('feature_image_path')){
                $dataUploadImage = $this->storageTraitUpload($request, 'feature_image_path', 'Blog');
                if (!empty($dataUploadImage)) {
                    $dataBlogCreate['image_path'] = $dataUploadImage['file_path'];
                    $dataBlogCreate['image_name'] = $dataUploadImage['file_name'];
                }
            }
            $this->blog->find($id)->update($dataBlogCreate);
            $Blog= $this->blog->find($id);
            /////////////////////////////

            if(!empty($request->blog_tag)){
                foreach ($request->blog_tag as $tagItem) {
                    $tagInstance = $this->tagBlog->firstOrCreate([
                        'name' => $tagItem
                    ]);
                    $tagIds [] = $tagInstance->id;
                }
            }
            $Blog->tags()->sync($tagIds);
            DB::commit();
            return redirect()->route('blogs.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception);
            Log::error('Messges' . $exception->getMessage() . 'Line' . $exception->getLine());

        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Blog $blog
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this ->blog->find($id)->delete();
            $this ->blogTag ->where('blog_id',$id)->delete();
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
