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
    <div class="col-md-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
    <form action="{{route('games.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Tên Trò Chơi</label>
            <input
                name="name"
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="formGroupExampleInput"
                value="{{old('name')}}"
                placeholder="Tên Game">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Đường Dẫn</label>
            <input
                name="path"
                type="text"
                class="form-control @error('path') is-invalid @enderror"
                id="formGroupExampleInput"
                value="{{old('path')}}"
                placeholder="Tên Game">
            @error('path')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Ảnh Đại Diện</label>
            <input
                name="feature_image_path"
                type="file"
                value="{{old('feature_image_path')}}"
                class="form-control @error('feature_image_path') is-invalid @enderror"
                id="formGroupExampleInput">
            @error('feature_image_path')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Ảnh Chi Tiết</label>
            <input
                name="image_path[]"
                multiple
                value="{{old('image_path')}}"
                type="file"
                class="form-control @error('image_path') is-invalid @enderror"
                id="formGroupExampleInput">
            @error('image_path')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Chọn Danh Mục</label>
            <select name="category_id" class="form-control select2_init class="
                    @error('category_id') is-invalid @enderror">
            {!! $htmlOption !!}
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Nhập Tag</label>
            <select name="game_tag[]" class="form-control tags_select2_chose @error('game_tag') is-invalid @enderror"
                    multiple="multiple">
                @foreach($tag as $itemTag)
                    <option value="{{$itemTag->name}}">{{$itemTag->name}}</option>
                @endforeach
            </select>
            @error('game_tag')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput ">Nhập Mô Tả</label>
            <textarea name="contents" class="form-control my-editor @error('contents') is-invalid @enderror" id="exampleFormControlTextarea1"
                      rows="8">{{old('contents')}}</textarea>
            @error('contents')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput ">Nhập Hướng Dẫn Chơi</label>
            <textarea name="tutorial" class="form-control my-editor  @error('tutorial') is-invalid @enderror" id="exampleFormControlTextarea1"
                      rows="8">{{old('tutorial')}}</textarea>
            @error('tutorial')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
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
