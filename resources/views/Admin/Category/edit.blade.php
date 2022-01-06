@extends('layouts.admin')
@section('name_card')
    Chỉnh Sửa Danh Mục'{{$category->name}}'
@endsection
@section('main')
    <form action="{{route('categories.update',['id' => $category -> id])}}" method="post">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Tên Danh Mục</label>
            <input name="name" type="text" value="{{$category->name}}" class="form-control" id="formGroupExampleInput" placeholder="">
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
