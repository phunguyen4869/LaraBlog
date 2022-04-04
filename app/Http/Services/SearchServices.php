<?php

namespace App\Http\Services;

use App\Models\Post;
use App\Models\User;
use App\Models\Slider;
use App\Models\Category;

class SearchServices
{
    public function search($search, $section)
    {
        switch ($section) {
            case 'slider':
                $results = $this->searchSliders($search);
                return $results;
                break;
            case 'category':
                $results = $this->searchCategories($search);
                return $results;
                break;
            case 'post':
                $results = $this->searchPosts($search);
                return $results;
                break;
            case 'user':
                $results = $this->searchUsers($search);
                return $results;
                break;
        }
    }

    public function searchSliders($search)
    {
        $slider = Slider::where('title', 'like', '%' . $search . '%')->paginate(5);

        // return $slider->withPath('/admin/search?search=' . $search . '&section=slider');
        return $slider->withQueryString();
    }

    public function searchCategories($search)
    {
        $categories = Category::where('title', 'like', '%' . $search . '%')->paginate(5);

        // return $categories->withPath('/admin/search?search=' . $search . '&section=category');
        return $categories->withQueryString();
    }

    public function searchPosts($search)
    {
        $posts = Post::where('title', 'like', "%$search%")->paginate(5);

        // return $posts->withPath('/admin/search?search=' . $search . '&section=post');
        return $posts->withQueryString();
    }

    public function searchUsers($search)
    {
        $user = User::where('name', 'like', "%$search%")->paginate(5);

        // return $user->withPath('/admin/search?search=' . $search . '&section=user');
        return $user->withQueryString();
    }
}
