<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboardAdmin() 
    {
        $title = 'Dashboard Admin';
        return view('admin.content.dashboard.index', compact('title'));
    }

    public function adminProfil() 
    {
        $title = 'Profil';
        return view('admin.content.profil.index', compact('title'));
    }

    public function adminProgram() 
    {
        $title = 'Program Kerja';
        return view('admin.content.program.index', compact('title'));
    }

    function adminProgramCreate()
    {
        $title = 'Program Kerja';
    }

    public function adminStore() 
    {
        $title = 'Store';
        return view('admin.content.store.index', compact('title'));
    }
}
