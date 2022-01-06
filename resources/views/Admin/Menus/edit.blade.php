@extends('layouts.admin')
@section('name_card')
   Chỉnh Sửa Menu      ''{{$menu->name}}'
@endsection
@section('main')
    <form action="{{route('menus.update',['id' => $menu -> id])}}" method="post">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Tên Danh Mục</label>
            <input name="name" type="text" value="{{$menu->name}}" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Chọn Danh Mục</label>
            <select valuese  name="parent_id"   class="form-control" id="exampleFormControlSelect1">
                <option value="0">Chọn danh mục</option>
                {!!$htmlOption!!}
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
