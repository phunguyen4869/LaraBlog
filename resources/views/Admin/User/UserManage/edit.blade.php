@extends('Admin.main')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit user</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @include('Admin.alert')
        <form action="#" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control"
                        value="{{ $user->email ?? '' }}">
                </div>

                <div class="form-group">
                    <label for="intro">Intro</label>
                    <input type="text" name="intro" class="form-control"
                        placeholder="Enter user intro" value="{{ $user->intro }}">
                </div>

                <div class="form-group">
                    <label for="profile">Profile</label>
                    <input type="text" name="profile" class="form-control"
                        placeholder="Enter user profile"
                        value="{{ $user->profile }}">
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
                        <a href="{{ $user->avatar }}" target="_blank"><img
                                src="{{ $user->avatar }}" width="200px" /></a>
                    </div>
                    <input type="hidden" name="avatar" id="image"
                        value="{{ $user->avatar }}" />
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control"
                        placeholder="Enter password">
                </div>

                <div class="form-group">
                    <label for="re-password">Verify Password</label>
                    <input type="password" name="re-password" class="form-control"
                        placeholder="Retype password">
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
