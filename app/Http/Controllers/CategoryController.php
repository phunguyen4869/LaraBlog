<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryServices;
use App\Models\Category;
use Illuminate\Http\Request;

use function PHPSTORM_META\registerArgumentsSet;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryServices $category)
    {
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->category->getAll();

        return view('admin.category.list', [
            'categories' => $categories,
            'title' => 'Category List',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allCategories = $this->category->getAll();

        $categories = $this->category->getAllParent();

        return view('admin.category.create', [
            'title' => 'Create Category',
            'categories' => $categories,
            'allCategories' => $allCategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = $this->category->create($request);

        if ($result) {
            return redirect()->route('category.index')->with('success', 'Create category successfully');
        } else {
            return redirect()->back()->with('error', 'Create category failed');
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
    public function edit(Category $category)
    {
        $categories = $this->category->getAllParent();

        $allCategories = $this->category->getAll();

        return view('admin.category.edit', [
            'title' => 'Edit Category',
            'category' => $category,
            'categories' => $categories,
            'allCategories' => $allCategories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $result = $this->category->update($request, $category->id);

        if ($result) {
            return redirect()->route('category.index')->with('success', 'Update category successfully');
        } else {
            return redirect()->back()->with('error', 'Update category failed');
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
        $result = $this->category->delete($request->id);

        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Category deleted successfully'
            ]);
        } else {
            return response()->json([
                'error' => true,
            ]);
        }
    }
}
