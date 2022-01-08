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
    <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
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
            <label for="exampleFormControlSelect1">Nhập Tag</label>
            <select name="blog_tag[]" class="form-control tags_select2_chose @error('blog_tag') is-invalid @enderror"
                    multiple="multiple">
                @foreach($tag as $itemTag)
                    <option value="{{$itemTag->name}}">{{$itemTag->name}}</option>
                @endforeach
            </select>
            @error('blog_tag')
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


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
@section('js')
    <script src="{{asset('admins/game/add/add.js')}}"></script>
    <script src="https://cdn.tiny.cloud/1/jbtl59mg1cy9ucbkg1klu08mvj1ywhzd3usvxtv59j6kj7ug/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
@endsection
