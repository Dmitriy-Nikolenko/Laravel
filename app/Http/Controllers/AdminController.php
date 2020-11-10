<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class AdminController extends Controller
{
    public function index()
    {

        return Response::view('admin.index');
    }
}
