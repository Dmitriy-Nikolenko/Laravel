<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpsertNewsRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Response;
use App\Http\Controllers\Controller;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::with('category')->paginate(5);
        return Response::view('admin.news.index', compact( 'news'));
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
     * @param UpsertNewsRequest $request
     * @return \Illuminate\Http\Response | RedirectResponse
     */
    public function store(UpsertNewsRequest $request)
    {

        News::query()->create($request->except('_token'));
        return redirect()->route('news.index');
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
     * @param UpsertNewsRequest $request
     * @param int $id
     * @return \Illuminate\Http\Response | RedirectResponse
     */
    public function update(UpsertNewsRequest $request, $id)
    {

        $news = News::query()->findOrFail($id);
        $news->update($request->except('_token'));

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        News::destroy($id);
        return Response::json([
            'status' => true,
        ]);
     }
}
