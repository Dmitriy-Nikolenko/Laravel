<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpsertFeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Response;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return Response::view('feedback', compact('feedbacks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UpsertFeedbackRequest  $request
     * @return \Illuminate\Http\Response | RedirectResponse
     */
    public function store(UpsertFeedbackRequest $request)
    {
        Feedback::query()->create($request->except('_token'));
        return Response::view('feedback', ['statusFeedback' =>  true]);

    }

}
