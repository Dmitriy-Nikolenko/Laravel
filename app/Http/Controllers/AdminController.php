<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Response;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = DB::table('category')->select('*')->get();
        $news = DB::table('news')->select('*')->get();

        return Response::view('admin.news.index', compact('category', 'news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $category = DB::table('category')->select('*')->get();
        $source = DB::table('source')->select('*')->get();
        return Response::view('admin.news.create', compact('category', 'source'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('news.create')->withInput($request->all());
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
        $news = DB::table('news')->find($id);
        $category = DB::table('category')->get();
        $source = DB::table('source')->get();

        if ($news) {
            return Response::view('admin.news.edit', compact('news', 'category', 'source'));
        }
        return redirect()->route('news.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $news = DB::table('news')->find($id);
        return redirect()->route('news.edit', ['news' => $id])->withInput($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
