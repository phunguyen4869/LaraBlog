<ul style="list-style: none;">
    @foreach ($childs as $child)
        <li>
            <input type="checkbox" name="category_id[]"
                value="{{ $child->id }}">
            {{ $child->title }}
            @if (count($child->childs))
                @include(
                    'Admin.Post.childCategoryCreate',
                    [
                        'childs' => $child->childs,
                    ]
                )
            @endif
        </li>
    @endforeach
</ul>
