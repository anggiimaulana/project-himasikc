<?php

namespace App\Http\Controllers;

use App\Models\prokerModels;
use Illuminate\Http\Request;

class programController extends Controller
{
    public function index()
    {
        $title = 'Program Kerja HIMA-SIKC';
        $slug = 'program';
        $items = prokerModels::all();
        return view('content.program.index', compact('title', 'slug', 'items'));
    }

    public function detail()
    {
        $title = 'Program Kerja HIMA-SIKC';
        $slug = 'program-detail';
        return view('content.program.detail', compact('title', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['logo'] = $request->file('image')->store('proker', 'public');
        $data['docs_1'] = $request->file('image')->store('proker', 'public');
        $data['docs_2'] = $request->file('image')->store('proker', 'public');
        $data['docs_3'] = $request->file('image')->store('proker', 'public');
        prokerModels::create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
