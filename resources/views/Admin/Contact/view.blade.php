@extends('layouts.admin')
@section('name_card')
    Nội Dung
@endsection
@section('css')
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('admins/game/add/style.css')}}" rel="stylesheet"/>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">

@endsection
@section('css')
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('admins/game/add/style.css')}}" rel="stylesheet"/>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">

@endsection

@section('main')
    <div class="col-md-12">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Tên</label>
        <input

            type="text"
            disabled
            class="form-control"
            id="formGroupExampleInput"
            value="{{$contact->name}}"
            placeholder="Tên Game">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Email</label>
        <input

            type="text"
            disabled
            class="form-control"
            id="formGroupExampleInput"
            value="{{$contact->email}}">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Số điện thoại</label>
        <input

            type="text"
            disabled
            class="form-control"
            id="formGroupExampleInput"
            value="{{$contact->phone}}">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Địa Chỉ</label>
        <input

            type="text"
            disabled
            class="form-control"
            id="formGroupExampleInput"
            value="{{$contact->address}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Nội Dung</label>
        <textarea disabled class="form-control" id="exampleFormControlTextarea1"
                  rows="3">{{$contact ->message}}</textarea>
    </div>



    <hr>

    <h1>Phản Hồi</h1>
    <div class="form-group">
        <form method="post" action="{{route('contactadmin.mail',['id' => $contact -> id])}}">
            @csrf
            <label for="formGroupExampleInput">Tiêu Đề</label>
            <input
                name="subject"
                type="text"
                class="form-control"
                id="formGroupExampleInput"
                value="Phản hồi về {{$contact->message}}"
                placeholder="Tên Game">

            <div class="form-group">
                <label for="formGroupExampleInput">To Email</label>
                <input
                    name="mail"
                    type="text"
                    readonly="readonly"
                    class="form-control"
                    id="formGroupExampleInput"
                    value="{{$contact->email}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Tên</label>
                <input

                    type="text"
                    readonly="readonly"
                    class="form-control"
                    name="name"
                    id="formGroupExampleInput"
                    value="{{$contact->name}}"
                    placeholder="Tên Game">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput ">Nội dung</label>
                <textarea name="message" class="form-control "
                          id="exampleFormControlTextarea1"
                          rows="8"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
@section('js')
    <script src="{{asset('admins/game/add/add.js')}}"></script>
    <script src="https://cdn.tiny.cloud/1/jbtl59mg1cy9ucbkg1klu08mvj1ywhzd3usvxtv59j6kj7ug/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
@endsection
