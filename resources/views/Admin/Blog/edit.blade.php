@extends('layouts.admin')
@section('name_card')
    Thêm Game
@endsection
@section('css')
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('admins/game/add/style.css')}}" rel="stylesheet"/>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">

@endsection

@section('main')

    <form action="{{route('blogs.update',['id' => $blog -> id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Tên Trò Chơi</label>
            <input
                name="name"
                type="text"
                value="{{$blog->name}}"
                class="form-control @error('name') is-invalid @enderror"
                id="formGroupExampleInput"
                placeholder="Tên Game">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Ảnh Đại Diện</label>
            <div class="col-md-12">
                <div class="row">
                    <img class="image_feature" src="{{$blog->image_path}}" alt="">
                </div>
            </div>
            <input
                name="feature_image_path"
                type="file"
                class="form-control"
                id="formGroupExampleInput">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Nhập Tag</label>
            <select name="blog_tag[]" class="form-control tags_select2_chose" multiple="multiple">
                @foreach($tag as $tagItem)
                    <option {{$tag_blog ->contains('id',$tagItem->id)?'selected': ''}} value="{{$tagItem->name}}" >{{$tagItem->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Mô Tả</label>

            <textarea value="" name="contents" class="form-control my-editor" id="exampleFormControlTextarea1"
                      rows="8">{{$blog->content}}</textarea>
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
@section('js')
    <script src="{{asset('admins/game/add/add.js')}}"></script>

    <script src="https://cdn.tiny.cloud/1/jbtl59mg1cy9ucbkg1klu08mvj1ywhzd3usvxtv59j6kj7ug/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
@endsection
