<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpsertCategoryRequest;
use App\Http\Requests\UpsertFeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;


class AdminFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::query()->paginate('5');
        return \Response::view('admin.feedbacks.index', compact('feedbacks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedbacks = Feedback::query()->findOrFail($id);
        return \Response::view('admin.feedbacks.edit', compact('feedbacks'));
        //return \Response::view('admin.feedbacks.edit', compact('feedbacks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpsertFeedbackRequest $request
     * @param int $id
     * @return \Illuminate\Http\Response | RedirectResponse
     */
    public function update(UpsertFeedbackRequest $request, $id)
    {
        $feedbacks = Feedback::query()->findOrFail($id);
        $feedbacks->update($request->except('_token'));
       return redirect()->route('feedbacks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        Feedback::destroy($id);
        return Response::json([
            'status' => true,
        ]);
    }
}
