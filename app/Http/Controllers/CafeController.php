<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Http\Requests\StoreCafeRequest;
use App\Http\Requests\UpdateCafeRequest;
use Illuminate\View\View;

class CafeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', [
                'cafe' => Cafe::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCafeRequest $request)
    {
        Cafe::create($request->all());

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\cafe $cafe
     * @return \\Illuminate\Http\Response
     */
    public function show(Cafe $cafe)
    {
        return view('show', [
            'cafe' => $cafe
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cafe $cafe)
    {
        return view('edit', [
            'cafe' => $cafe
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCafeRequest $request, Cafe $cafe)
    {
        $cafe->update($request->all());  

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cafe $cafe)
    {
        $cafe->delete();

        return redirect()->route('index');
    }
}
