<?php

namespace App\Http\Controllers;

use App\Models\kuis4;
use Illuminate\Http\Request;

class Kuis4Controller extends Controller
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
        $kuis4 = kuis4::create($request->all());
        return response()->json(['message' => 'User is logged in successfully.', 'kuis4' =>  $kuis4 ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(kuis4 $kuis4)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kuis4 $kuis4)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kuis4 $kuis4)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kuis4 $kuis4)
    {
        //
    }
}
