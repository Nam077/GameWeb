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
    <form action="{{route('sliders.update',['id' => $slider -> id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Tên Slide</label>
            <input
                name="name"
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="formGroupExampleInput"
                value="{{$slider->name}}"
                placeholder="Tên Game">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Mô Tả</label>
            <input
                name="description"
                type="text"
                class="form-control @error('description') is-invalid @enderror"
                id="formGroupExampleInput"
                value="{{$slider->description}}"
                placeholder="Tên Game">
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Ảnh Đại Diện</label>
            <div class="col-md-12">
                <div class="row">
                    <img class="image_feature" src="{{$slider->image_path}}" alt="">
                </div>
            </div>
            <input
                name="image_path"
                type="file"
                class="form-control @error('image_path') is-invalid @enderror"
                id="formGroupExampleInput">
            @error('image_path')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
@section('js')
    <script src="{{asset('admins/game/add/add.js')}}"></script>
@endsection
