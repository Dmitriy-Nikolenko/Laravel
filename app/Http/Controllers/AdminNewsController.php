<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Response;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::query()->paginate(5);
        $category = Category::all()->keyBy('id');

        return Response::view('admin.news.index', compact('category', 'news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $category = Category::all();
        $source = Source::all();
        return Response::view('admin.news.create', compact('category', 'source'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response | RedirectResponse
     */
    public function store(Request $request)
    {
        News::query()->create($request->except('_token'));
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::query()->findOrFail($id);
        $category = Category::all();
        $source = Source::all();
        return Response::view('admin.news.edit', compact('news', 'category', 'source'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response | RedirectResponse
     */
    public function update(Request $request, $id)
    {

        $news = News::query()->findOrFail($id);
        $news->update($request->except('_token'));

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response | RedirectResponse
     */
    public function destroy($id)
    {
        return redirect()->route('news.index');
     }
}
