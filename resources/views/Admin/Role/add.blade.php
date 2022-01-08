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
@section('js')
    <script src="{{asset('admins/role/add/index.js')}}"></script>
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
    <form action="{{route('roles.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Tên Nhóm Người Dùng</label>
            <input
                name="name"
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="formGroupExampleInput"
                value="{{old('name')}}"
                placeholder="Tên">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập mô tả vai trò</label>
            <input
                name="display_name"
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="formGroupExampleInput"
                value="{{old('display_name')}}"
                placeholder="Mô Tả Vai Trò">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="hehe">
            <div>
                <div class="card-body text-primary col-md-3">
                    <h5>
                        <label for="">
                            <input class="check_all" type="checkbox">
                        </label>
                        Check all
                    </h5>
                </div>

            </div>
            @foreach($permissionParent as $item)
                <div class="card-success card_parent col-md-12">
                    <div class="card-header">
                        <label for="">
                            <input class="checkbox_parent" type="checkbox" value="">
                        </label>
                        {{$item->display_name}}
                    </div>
                    <div class="row">
                        @foreach($item->permissionChildren as $items)
                            <div class="card-body text-primary col-md-3">
                                <h5>
                                    <label for="">
                                        <input class="checkbox_children" name="permission_id[]" value=" {{$items->id}}"
                                               type="checkbox">
                                    </label>
                                    {{$items->display_name}}
                                </h5>
                            </div>

                        @endforeach
                    </div>
                </div>

        @endforeach
        </div>
        <button type="submit" class="btn btn-primary  ">Submit</button>
    </form>

@endsection
@section('js')
    <script src="{{asset('admins/game/add/add.js')}}"></script>
@endsection
