<?php

namespace App\Http\Services;

use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\Post_Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostServices
{
    public function getAll()
    {
        $posts = Post::all();

        return $posts;
    }

    public function get()
    {
        $posts = Post::where('active', 1)->get();

        return $posts;
    }

    public function getPostCategory($id)
    {
        $post_categories = Post_Category::select('category_id')->where('post_id', $id)->get();

        return $post_categories;
    }

    public function getById($id)
    {
        $post = Post::find($id);

        return $post;
    }

    public function create($request, $author_id)
    {
        $title = $request->input('title');
        $meta_title = $request->input('meta_title');
        $slug = Str::slug($title);
        $summary = $request->input('summary');
        $published = $request->input('published');
        $content = $request->input('content');
        $category_id = $request->input('category_id');

        if ($published == 'on') {
            $published_at = now();
            $published = 1;
        } else {
            $published_at = null;
            $published = 0;
        }

        try {
            DB::beginTransaction();

            $id = Post::create([
                'title' => $title,
                'meta_title' => $meta_title,
                'slug' => $slug,
                'summary' => $summary,
                'published' => $published,
                'published_at' => $published_at,
                'content' => $content,
                'author_id' => $author_id,
            ])->id;

            foreach ($category_id as $category) {
                Post_Category::create([
                    'post_id' => $id,
                    'category_id' => $category,
                ]);
            }

            DB::commit();
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            DB::rollBack();

            return false;
        }

        return true;
    }

    public function update($request, $id, $author_id)
    {
        $title = $request->input('title');
        $meta_title = $request->input('meta_title');
        $slug = Str::slug($title);
        $summary = $request->input('summary');
        $published = $request->input('published');
        $content = $request->input('content');
        $category_id = $request->input('category_id');

        if ($published == 'on') {
            $published_at = now();
            $published = 1;
        } else {
            $published_at = null;
            $published = 0;
        }

        try {
            DB::beginTransaction();

            Post::where('id', $id)->update([
                'title' => $title,
                'meta_title' => $meta_title,
                'slug' => $slug,
                'summary' => $summary,
                'published' => $published,
                'published_at' => $published_at,
                'content' => $content,
                'author_id' => $author_id,
            ]);

            Post_Category::where('post_id', $id)->delete();

            foreach ($category_id as $category) {
                Post_Category::create([
                    'post_id' => $id,
                    'category_id' => $category,
                ]);
            }

            DB::commit();
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            DB::rollBack();

            return false;
        }

        return true;
    }

    public function delete($id)
    {
        try {
            Post::where('id', $id)->delete();

            Post_Category::where('post_id', $id)->delete();
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return false;
        }

        return true;
    }
}
