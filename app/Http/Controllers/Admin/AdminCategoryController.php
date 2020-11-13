<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpsertCategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Response;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::query()->paginate(5);
        return Response::view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return Response::view('admin.category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UpsertCategoryRequest $request
     * @return \Illuminate\Http\Response |RedirectResponse
     */
    public function store(UpsertCategoryRequest $request)
    {
        Category::query()->create($request->except('_token'));
        return redirect('/admin/category');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::query()->findOrFail($id);
        return Response::view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpsertCategoryRequest $request
     * @param int $id
     * @return \Illuminate\Http\Response |RedirectResponse
     */
    public function update(UpsertCategoryRequest $request, $id)
    {
        $category = Category::query()->findOrFail($id);
        $category->update($request->except($id));
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return Response::json([
            'status' => true,
        ]);
    }
}
