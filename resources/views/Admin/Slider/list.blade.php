@extends('Admin.main')

@section('content')
    <div class="col-md-12 align-items-right">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sliders list</h3>
            </div>
            @include('Admin.alert')
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Active</th>
                            <th style="width: 120px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ $slider->id }}</td>
                                <td>{{ $slider->title }}</td>
                                <td>{{ $slider->description }}</td>
                                <td><img src="{{ asset($slider->image) }}"
                                        alt="{{ $slider->title }}" width="100px">
                                </td>
                                <td>
                                    @if ($slider->active == 1)
                                        <span
                                            class="badge badge-success">Active</span>
                                    @else
                                        <span
                                            class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td><a class="btn btn-primary btn-sm"
                                        href="{{ url('admin/slider/edit/' . $slider->id) }}">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm"
                                        onclick="removeRow({{ $slider->id }}, '/admin/slider/destroy')">
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
