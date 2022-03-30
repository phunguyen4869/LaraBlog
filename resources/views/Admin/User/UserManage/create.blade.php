@extends('Admin.main')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add user</h3>
        </div>
        @include('admin.alert')
        <!-- /.card-header -->
        <!-- form start -->
        <form action="#" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control"
                        placeholder="Enter name" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control"
                        placeholder="Enter email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control"
                        placeholder="Enter password"
                        value="{{ old('password') }}">
                </div>

                <div class="form-group">
                    <label for="re-password">Verify Password</label>
                    <input type="password" name="re-password" class="form-control"
                        placeholder="Retype password"
                        value="{{ old('re-password') }}">
                </div>

                <div class="form-group">
                    <label for="intro">Intro</label>
                    <input type="text" name="intro" class="form-control"
                        placeholder="Enter user intro" value="{{ old('intro') }}">
                </div>

                <div class="form-group">
                    <label for="profile">Profile</label>
                    <input type="text" name="profile" class="form-control"
                        placeholder="Enter user profile"
                        value="{{ old('profile') }}">
                </div>

                <div class="form-group">
                    <label for="upload">Avatar</label>
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
                    <input type="hidden" name="avatar" id="image">
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
