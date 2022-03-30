@extends('Admin.main')

@section('content')
    <div class="col-md-12 align-items-right">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users list</h3>
            </div>
        @include('Admin.alert')
        <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Intro</th>
                        <th>Avatar</th>
                        <th style="width: 120px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->intro }}</td>
                            <td><img src="{{ asset($user->avatar) }}"
                                     alt="{{ $user->name }}" width="100px">
                            </td>
                            <td><a class="btn btn-primary btn-sm"
                                   href="{{ url('admin/user/edit/' . $user->id) }}">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a class="btn btn-danger btn-sm"
                                   onclick="removeRow({{ $user->id }}, '/admin/user/destroy')">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link"
                                             href="#">«</a></li>
                    <li class="page-item"><a class="page-link"
                                             href="#">1</a></li>
                    <li class="page-item"><a class="page-link"
                                             href="#">2</a></li>
                    <li class="page-item"><a class="page-link"
                                             href="#">3</a></li>
                    <li class="page-item"><a class="page-link"
                                             href="#">»</a></li>
                </ul>
            </div>
        </div>
        <!-- /.card -->
    </div>
@endsection
