<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("admin.home");
    }

    public function students(Request $request)
    {
        dd("hello");
        return view("admin.users");
    }
}
