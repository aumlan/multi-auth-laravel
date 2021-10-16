<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//(3)
class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
}
