<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index() 
    {
        $title = 'Dashboard';
        return view('admin.content.dashboard.index', compact('title'));
    }
}
