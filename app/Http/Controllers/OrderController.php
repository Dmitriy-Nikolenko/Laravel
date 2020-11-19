<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpsertOrderRequest;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        return Response::view('order', compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UpsertOrderRequest  $request
     * @return \Illuminate\Http\Response | RedirectResponse
     */
    public function store(UpsertOrderRequest $request)
    {
        Order::query()->create($request->except('_token'));
        return Response::view('order', ['statusOrder' =>  true]);
    }

}
