<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\SearchServices;

class SearchController extends Controller
{
    protected $search;

    public function __construct(SearchServices $search)
    {
        $this->search = $search;
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $section = $request->get('section');

        $results = $this->search->search($search, $section);

        switch ($section) {
            case 'slider':
                return view('Admin.Slider.list', [
                    'title' => 'Slider search',
                    'sliders' => $results,
                ]);
                break;
            case 'category':
                return view('Admin.Category.list', [
                    'title' => 'Category search',
                    'categories' => $results,
                ]);
                break;
            case 'post':
                return view('Admin.Post.list', [
                    'title' => 'Post search',
                    'posts' => $results,
                ]);
                break;
            case 'user':
                return view('Admin.User.UserManage.list', [
                    'title' => 'User search',
                    'users' => $results,
                ]);
                break;
        }
    }
}
