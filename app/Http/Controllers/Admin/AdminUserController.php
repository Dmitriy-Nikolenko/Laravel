<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InsertUserRequest;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;
use Session;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::query()->paginate(5);
        $authUser = Auth::user();
        return Response::view('admin.user.index', compact('users', 'authUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Response::view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param InsertUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(InsertUserRequest $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        Session::flash('userAdd', sprintf('Пользователь %s успешно создан', $user->name));
        return redirect()->route('user.index');
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
        $user = User::query()->findOrFail($id);
        return Response::view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::query()->findOrFail($id);
        if (Hash::check($request->input('password_old'), $user->password))
        {
            $user->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password_new')),
                'is_admin' => ($request->input('is_admin')) ? '1' : '0',
            ]);
            Session::flash('userUpdate', sprintf('Данные пользователя %s успешно изменены', $user->name));
            return redirect()->route('user.index');
        }
        Session::flash('userNoUpdate', sprintf('Текущий пароль пользователя %s не правильный', $user->name));
        return Response::view('admin.user.edit', compact('user'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        User::destroy($id);
        return Response::json([
            'status' => true,
        ]);
    }
}
