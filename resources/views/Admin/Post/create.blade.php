@extends('Admin.main')

@section('head')
    <script src="/admin/plugins/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create new post</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="create" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Post title</label>
                            <input type="text" name="title" id="title"
                                class="form-control" placeholder="Enter title">
                        </div>

                        <div class="form-group">
                            <label for="meta_title">Post meta title</label>
                            <input type="text" name="meta_title" id="meta_title"
                                class="form-control"
                                placeholder="Enter meta title">
                        </div>

                        <div class="form-group">
                            <label for="summary">Summary</label>
                            <input type="text" name="summary" id="summary"
                                class="form-control" placeholder="Enter Summary">
                        </div>

                        <div class="form-group">
                            <label for="content">Content</label>
                            <input type="text" name="content" id="content"
                                class="form-control" placeholder="Content">
                        </div>

                        <div class="form-check">
                            <input type="checkbox" name="published" id="published"
                                class="form-check-input">
                            <label class="form-check-label"
                                for="published">Published</label>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit"
                            class="btn btn-primary">Submit</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-header">
                <h3 class="card-title">Category</h3>
            </div>

            <ul>
                <h2>List</h2>
            </ul>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
