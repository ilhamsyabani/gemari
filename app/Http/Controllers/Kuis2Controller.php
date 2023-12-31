<?php

namespace App\Http\Controllers;

use App\Models\kuis2;
use Illuminate\Http\Request;

class Kuis2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kuis2 = kuis2::create($request->all());
        return response()->json(['message' => 'User is logged in successfully.', 'kuis2' =>  $kuis2 ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(kuis2 $kuis2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kuis2 $kuis2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kuis2 $kuis2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kuis2 $kuis2)
    {
        //
    }
}
