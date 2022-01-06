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

    <form action="{{route('games.update',['id' => $game -> id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Tên Trò Chơi</label>
            <input
                name="name"
                type="text"
                value="{{$game->name}}"
                class="form-control @error('name') is-invalid @enderror"
                id="formGroupExampleInput"
                placeholder="Tên Game">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Đường Dẫn</label>
            <input
                name="path"
                type="text"
                value="{{$game->path}}"
                class="form-control"
                id="formGroupExampleInput"
                placeholder="Tên Game">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Ảnh Đại Diện</label>
            <div class="col-md-12">
                <div class="row">
                    <img class="image_feature" src="{{$game->feature_image_path}}" alt="">
                </div>
            </div>
            <input
                name="feature_image_path"
                type="file"
                class="form-control"
                id="formGroupExampleInput">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Ảnh Chi Tiết</label>
            <input
                name="image_path[]"
                multiple
                type="file"
                class="form-control"
                id="formGroupExampleInput">

        </div>
        <div class="row">
            @foreach($game->gameImage as $imageItem)
                <div class="col" style="float: left">
                    <div>
                        <img class="image_feature" src="{{$imageItem->image_path}}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Chọn Danh Mục</label>
            <select name="category_id" class="form-control select2_init" id="exampleFormControlSelect1">
                <option value="0">Chọn danh mục</option>
                {!!$htmlOption!!}
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Nhập Tag</label>
            <select name="game_tag[]" class="form-control tags_select2_chose" multiple="multiple">
                @foreach($tag as $tagItem)
                    <option {{$tag_game ->contains('id',$tagItem->id)?'selected': ''}} value="{{$tagItem->name}}" >{{$tagItem->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Mô Tả</label>

            <textarea value="" name="contents" class="form-control my-editor" id="exampleFormControlTextarea1"
                      rows="8">{{$game->content}}</textarea>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Hướng Dẫn Chơi</label>
            <textarea value="" name="tutorial" class="form-control my-editor" id="exampleFormControlTextarea1"
                      rows="8">{{$game->tutorial}}</textarea>
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
