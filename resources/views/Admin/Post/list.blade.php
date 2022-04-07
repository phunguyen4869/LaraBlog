@extends('Admin.main')

@section('head')
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/rg-1.1.4/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.css" />
@endsection

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

@section('footer')
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js">
    </script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/rg-1.1.4/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.js">
    </script>
@endsection
