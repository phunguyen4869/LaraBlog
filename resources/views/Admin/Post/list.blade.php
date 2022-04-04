@extends('Admin.main')

@section('content')
    <div class="col-md-12 align-items-right">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Posts list</h3>
            </div>
            @include('Admin.alert')
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th>Author ID</th>
                            <th>Title</th>
                            <th>Meta Title</th>
                            <th>Slug</th>
                            <th>Summary</th>
                            <th style="width: 120px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->author_id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->meta_title }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>{{ $post->summary }}</td>
                                <td><a class="btn btn-primary btn-sm"
                                        href="{{ url('admin/post/edit/' . $post->id) }}">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm"
                                        onclick="removeRow({{ $post->id }}, '/admin/post/destroy')">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            {{-- <div class="card-footer clearfix">
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
            </div> --}}
            {{ $posts->links() }}
        </div>
        <!-- /.card -->
    </div>
@endsection
