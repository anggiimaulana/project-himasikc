<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index() 
    {
        $title = 'Dashboard Admin';
        return view('admin.content.dashboard.index', compact('title'));
    }

    public function store() 
    {
        $title = 'Store';
        return view('admin.content.store.index', compact('title'));
    }
}
