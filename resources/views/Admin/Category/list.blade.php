@extends('Admin.main')

@section('content')
    <div class="col-md-12 align-items-right">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Categories list</h3>
            </div>
            @include('Admin.alert')
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th>Parent ID</th>
                            <th>Title</th>
                            <th>Meta Title</th>
                            <th>Slug</th>
                            <th>Content</th>
                            <th style="width: 120px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->parent_id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->meta_title }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->content }}</td>
                                @if ($category->id != 1)
                                    <td><a class="btn btn-primary btn-sm"
                                            href="{{ url('admin/category/edit/' . $category->id) }}">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm"
                                            onclick="removeRow({{ $category->id }}, '/admin/category/destroy')">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                @endif
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
