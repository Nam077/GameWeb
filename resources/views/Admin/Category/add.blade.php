@extends('layouts.admin')
@section('name_card')
   Thêm Danh Mục
@endsection
@section('main')
    <form action="{{route('categories.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Nhập Tên Danh Mục</label>
            <input name="name" type="text" class="form-control"  value="{{old('name')}}" class="@error('name') is-invalid @enderror" id="formGroupExampleInput"
                      placeholder="Example input">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Chọn Danh Mục</label>
            <select  name="parent_id"   class="form-control" id="exampleFormControlSelect1">
                <option value="0">Chọn danh mục</option>
                {!!$htmlOption!!}
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
