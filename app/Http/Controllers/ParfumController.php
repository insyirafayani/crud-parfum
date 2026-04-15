<?php

namespace App\Http\Controllers;

use App\Models\Parfum;
use Illuminate\Http\Request;

class ParfumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parfums = Parfum::all();
        return view('parfum.index', compact('parfums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parfum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Parfum::create($request->all());
        return redirect('/parfum');
    }

    /**
     * Display the specified resource.
     */
    public function show(Parfum $parfum)
    {
        return view('parfum.edit', compact('parfum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parfum $parfum)
    {
        return view('parfum.edit', compact('parfum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parfum $parfum)
    {
        $parfum->update($request->all());
        return redirect('/parfum');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parfum $parfum)
    {
        $parfum->delete();
        return redirect('/parfum');
    }
}
