<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Response;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return Response::view('admin.index');
    }
}
