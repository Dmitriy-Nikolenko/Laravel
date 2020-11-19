<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpsertSourceRequest;
use App\Models\Source;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Response;
use App\Http\Controllers\Controller;

class AdminSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $source = Source::query()->paginate(5);
        return Response::view('admin.source.index', compact('source'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $source = Source::all();
        return Response::view('admin.source.create', compact('source'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UpsertSourceRequest $request
     * @return \Illuminate\Http\Response | RedirectResponse
     */
    public function store(UpsertSourceRequest $request)
    {
        Source::query()->create($request->except('_token'));
        return redirect()->route('source.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $source = Source::query()->findOrFail($id);
        return Response::view('admin.source.edit', compact('source'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpsertSourceRequest $request
     * @param int $id
     * @return \Illuminate\Http\Response | RedirectResponse
     */
    public function update(UpsertSourceRequest $request, $id)
    {
        $source = Source::query()->findOrFail($id);
        $source->update($request->except('_token'));
        return redirect()->route('source.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        Source::destroy($id);
        return Response::json([
            'status' => true,
        ]);
    }
}
