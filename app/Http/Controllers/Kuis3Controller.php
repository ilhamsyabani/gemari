<?php

namespace App\Http\Controllers;

use App\Models\kuis3;
use Illuminate\Http\Request;

class Kuis3Controller extends Controller
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
        $kuis3 = kuis3::create($request->all());
        return response()->json(['message' => 'User is logged in successfully.', 'kuis3' =>  $kuis3 ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(kuis3 $kuis3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kuis3 $kuis3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kuis3 $kuis3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kuis3 $kuis3)
    {
        //
    }
}
