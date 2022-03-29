<ul style="list-style: none;">
    @foreach ($childs as $child)
        <li>
            <input type="checkbox" name="category_id[]"
                value="{{ $child->id }}"
                @foreach ($post_categories as $post_category) @if ($post_category->category_id == $child->id)
                checked @endif
                @endforeach
            >
            {{ $child->title }}
            @if (count($child->childs))
                @include(
                    'Admin.Post.childCategory',
                    [
                        'childs' => $child->childs,
                        'post_categories' => $post_categories,
                    ]
                )
            @endif
        </li>
    @endforeach
</ul>
