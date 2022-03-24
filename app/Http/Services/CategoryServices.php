<?php

namespace App\Http\Services;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoryServices
{
    public function getAll()
    {
        $categories = Category::all();

        return $categories;
    }

    public function getAllParent()
    {
        $categories = Category::where('parent_id', 1)->get();

        return $categories;
    }

    public function getById($id)
    {
        $category = Category::find($id);

        return $category;
    }

    public function create($request)
    {
        $parent_id = $request->input('parent_id');
        $title = $request->input('title');
        $meta_title = $request->input('meta_title');
        $slug = Str::of($title)->slug('-');
        $content = $request->input('content');

        try {
            Category::create([
                'parent_id' => $parent_id,
                'title' => $title,
                'meta_title' => $meta_title,
                'slug' => $slug,
                'content' => $content
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return false;
        }

        return true;
    }

    public function update($request, $id)
    {
        $parent_id = $request->input('parent_id');
        $title = $request->input('title');
        $meta_title = $request->input('meta_title');
        $slug = Str::of($title)->slug('-');
        $content = $request->input('content');

        try {
            DB::beginTransaction();

            Category::where('id', $id)->update([
                'parent_id' => $parent_id,
                'title' => $title,
                'meta_title' => $meta_title,
                'slug' => $slug,
                'content' => $content
            ]);

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
            Category::where('id', $id)->delete();
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return false;
        }

        return true;
    }
}
