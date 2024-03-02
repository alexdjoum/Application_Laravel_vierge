<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremaisonRequest;
use App\Http\Requests\UpdatemaisonRequest;
use App\Models\maison;

class MaisonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremaisonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(maison $maison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemaisonRequest $request, maison $maison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(maison $maison)
    {
        //
    }
}
