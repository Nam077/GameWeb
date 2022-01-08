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


    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Danh sách hỗ trợ</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contact as $value)
                        <tr>
                            <td>{{$value ->id}}</td>
                            <td>{{$value ->name}}</td>
                            <td>{{$value ->email}}</td>
                            <td>{{$value ->phone}}</td>
                            <td>{{$value ->address}}</td>
                            <td>
                                @if($value -> status == 0)
                                    <span class="badge badge-danger">Chưa phản hồi</span>
                                @else
                                    <span class="badge badge-success">Đã phản hổi</span>
                                @endif
                            </td>
                            <td class="text-right">
                                <a href="{{route('contactadmin.view',['id' =>$value->id])}}" class="btn btn-sm btn-success">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="" data-url ="{{route('contactadmin.delete',['id' =>$value->id])}}" class="btn btn-sm btn-danger btn-delete">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <div class="col-md-12">
                {{$contact -> links()}}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
