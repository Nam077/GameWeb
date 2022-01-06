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
    <form action="{{route('permissions.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Chọn Danh Mục</label>
            <?php
            $sidebar = config('sidebar');
            ?>
            <select name="sidebar" class="form-control" id="exampleFormControlSelect1">
                @foreach($sidebar as $item)
                    <option value="{{$item['value']}}">{{$item['label']}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12">
            <div class="row">
                <?php
                $module = config('module');
                ?>
                @foreach($module as $item)

                    <div class=" text-primary col-md-3">
                        <h5>
                            <label>
                                <input class="checkbox_children" name="permission_id[]" value="{{$item['value']}}"
                                       type="checkbox">
                            </label>
                            {{$item['title']}}
                        </h5>
                    </div>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
@section('js')
    <script src="{{asset('admins/game/add/add.js')}}"></script>
@endsection
