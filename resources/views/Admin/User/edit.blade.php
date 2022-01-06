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
    <form action="{{route('users.update',['id' => $user -> id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Tên </label>
            <input
                name="name"
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="formGroupExampleInput"
                value="{{$user->name}}"
                placeholder="Tên Game">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Email </label>
            <input
                name="email"
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                id="formGroupExampleInput"
                value="{{$user->email}}"
                placeholder="Tên Game">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Mật Khẩu </label>
            <input
                name="password"
                type="text"
                class="form-control @error('password') is-invalid @enderror"
                id="formGroupExampleInput"
                value=""
                placeholder="Tên Game">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Nhập Tag</label>
            <select name="roles_id[]" class="form-control tags_select2_chose @error('roles') is-invalid @enderror"
                    multiple="multiple">
                @foreach($role as $itemRole)
                    <option {{$userRole ->contains('id',$itemRole->id)?'selected': ''}} value="{{$itemRole->id}}" >{{$itemRole->name}}</option>
                @endforeach
            </select>
            @error('roles')
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
