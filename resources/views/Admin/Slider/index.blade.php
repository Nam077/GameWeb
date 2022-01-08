@extends('layouts.admin')
@section('name_card')
    Danh Sách Slider
@endsection
@section('css')
    <link href= "{{asset('admins/game/view/style.css')}}" rel="stylesheet"/>
@endsection
@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('admins/game/view/index.js')}}"></script>
@endsection
@section('main')
    <div class="col-md-12">
        <a class="btn btn-primary" href="{{route('sliders.create')}}">Thêm Slider</a>
    </div>
    <hr>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Silder</h3>

                <div class="card-tools">
                    <form action="">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="key" class="form-control float-right"
                                   placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Hình Ảnh</th>
                        <th>Description</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($slider as $value)
                    <tr>
                        <td>{{$value ->id}}</td>
                        <td>{{$value ->name}}</td>
                        <td>
                            <img class="image_game" src="{{$value ->image_path}}" alt="">
                        </td>
                        <td>{{$value ->description}}</td>
                        <td class="text-right">
                            <a href="{{route('sliders.edit',['id' =>$value->id])}}" class="btn btn-sm btn-success">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="" data-url ="{{route('sliders.delete',['id' =>$value->id])}}" class="btn btn-sm btn-danger btn-delete">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <div class="col-md-12">
                {{ $slider->appends(request()->all())->links() }}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
