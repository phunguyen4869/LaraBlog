@extends('Admin.main')

@section('head')
    <script src="/admin/plugins/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="#" method="POST">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{ $title }}</h3>
                    </div>
                    @include('admin.alert')
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Post title</label>
                            <input type="text" name="title" id="title"
                                class="form-control" placeholder="Enter title"
                                value="{{ $post->title }}">
                        </div>

                        {{-- <div class="form-group">
                            <label for="parent_id">Parent</label>
                            <select name="parent_id" id="parent_id"
                                class="form-control">
                                <option value="{{$post->parent_id}}" selected>Not Change</option>
                                @foreach ($allCategories as $allCategory)
                                    @if ($allCategory->id != $category->id)
                                        <option value="{{ $allCategory->id }}">
                                            {{ $allCategory->title }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div> --}}

                        <div class="form-group">
                            <label for="meta_title">Meta title</label>
                            <input type="text" name="meta_title" id="meta_title"
                                class="form-control" placeholder="Meta title"
                                value="{{ $post->meta_title }}">
                        </div>

                        <div class="form-group">
                            <label for="summary">Summary</label>
                            <input type="text" name="summary" id="summary"
                                class="form-control" placeholder="Summary"
                                value="{{ $post->summary }}">
                        </div>

                        <div class="form-group">
                            <label for="content">Post Content</label>
                            <textarea type="text" name="content" id="content" class="form-control"
                                placeholder="Content">
                                {{ $post->content }}
                            </textarea>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" name="published" id="published"
                                class="form-check-input"
                                @if ($post->published) checked @endif>
                            <label class="form-check-label"
                                for="published">Published</label>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit"
                            class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-header">
                    <h3 class="card-title">Category List</h3>
                </div>

                <ul style="list-style: none;">
                    @foreach ($categories as $category)
                        <li>
                            <input type="checkbox" name="category_id[]"
                                value="{{ $category->id }}"
                                @foreach ($post_categories as $post_category) @if ($post_category->category_id == $category->id)
                                checked @endif
                                @endforeach
                            >
                            {{ $category->title }}
                            @if (count($category->childs))
                                @include(
                                    'Admin.Post.childCategory',
                                    [
                                        'childs' => $category->childs,
                                        'post_categories' => $post_categories,
                                    ]
                                )
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
