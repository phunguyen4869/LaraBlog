<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Services\PostServices;
use App\Http\Controllers\Controller;
use App\Http\Services\CategoryServices;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    protected $post;
    protected $category;

    public function __construct(PostServices $post, CategoryServices $category)
    {
        $this->post = $post;
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.list', [
            'title' => 'List Post',
            'posts' => $this->post->getAll(),
            'categories' => $this->category->getAll(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->category->getAllParent();

        return view('admin.post.create', [
            'title' => 'Create new post',
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $author_id = $request->user()['id'];

        $result = $this->post->create($request, $author_id);

        if ($result) {
            return redirect()->route('post.index')->with('success', 'Create new post successfully');
        } else {
            return redirect()->back()->with('error', 'Create new post failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->post->getById($id);
        $post_categories = $this->post->getPostCategory($id);
        $categories = $this->category->getAllParent();

        return view('admin.post.edit', [
            'title' => 'Edit post',
            'post' => $post,
            'post_categories' => $post_categories,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $author_id = $request->user()['id'];

        $result = $this->post->update($request, $post->id, $author_id);

        if ($result) {
            return redirect()->route('post.index')->with('success', 'Edit post successfully');
        } else {
            return redirect()->back()->with('error', 'Edit post failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $result = $this->post->delete($request->id);

        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Delete post successfully'
            ]);
        } else {
            return response()->json([
                'error' => true,
            ]);
        }
    }
}
