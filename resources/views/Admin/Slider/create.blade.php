@extends('Admin.main')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add slider</h3>
        </div>
        @include('admin.alert')
        <!-- /.card-header -->
        <!-- form start -->
        <form action="#" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Slider title</label>
                    <input type="text" name="title" id="title" class="form-control"
                        placeholder="Enter title" value="{{old('title')}}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description"
                        class="form-control" placeholder="Description" value="{{old('description')}}">
                </div>

                <div class="form-group">
                    <label for="upload">Picture</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" id="upload"
                                class="custom-file-input">
                            <label class="custom-file-label" id="upload-label"
                                for="upload">Choose file</label>
                        </div>
                    </div>
                    <div id="upload-image">

                    </div>
                    <input type="hidden" name="image" id="image">
                </div>

                <div class="form-check">
                    <input type="checkbox" name="active" id="active"
                        class="form-check-input">
                    <label class="form-check-label"
                        for="active">Active</label>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            @csrf
        </form>
    </div>
@endsection
