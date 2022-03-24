@extends('Admin.main')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{$title}}</h3>
                </div>
                @include('admin.alert')
                <!-- /.card-header -->
                <!-- form start -->
                <form action="create" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Category title</label>
                            <input type="text" name="title" id="title"
                                class="form-control" placeholder="Enter title">
                        </div>

                        <div class="form-group">
                            <label for="parent_id">Parent</label>
                            <select name="parent_id" id="parent_id"
                                class="form-control">
                                @foreach ($allCategories as $allCategory)
                                    <option value="{{ $allCategory->id }}">
                                        {{ $allCategory->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="meta_title">Meta title</label>
                            <input type="text" name="meta_title" id="meta_title"
                                class="form-control" placeholder="Meta title">
                        </div>

                        <div class="form-group">
                            <label for="content">Category Content</label>
                            <input type="text" name="content" id="content"
                                class="form-control" placeholder="Content">
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
                <h3 class="card-title">Category List</h3>
            </div>

            <ul>
                @foreach ($categories as $category)
                    <li>
                        {{ $category->title }}
                        @if (count($category->childs))
                            @include(
                                'Admin.Category.manageChild',
                                [
                                    'childs' => $category->childs,
                                ]
                            )
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
