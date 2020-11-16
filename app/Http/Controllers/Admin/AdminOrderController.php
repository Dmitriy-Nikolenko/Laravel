<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpsertOrderRequest;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Response;
use App\Http\Controllers\Controller;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::query()->paginate(5);

        return Response::view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders = Order::query()->findOrFail($id);

        return Response::view('admin.orders.edit', compact('orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpsertOrderRequest $request
     * @param int $id
     * @return \Illuminate\Http\Response |RedirectResponse
     */
    public function update(UpsertOrderRequest $request, $id)
    {
        $orders = Order::query()->findOrFail($id);
        $orders->update($request->except('_token'));
        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        Order::destroy($id);
        return Response::json([
            'status' => true,
        ]);
    }
}
