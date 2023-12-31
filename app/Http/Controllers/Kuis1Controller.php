<?php

namespace App\Http\Controllers;

use App\Models\kuis1;
use Illuminate\Http\Request;

class Kuis1Controller extends Controller
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

        $kuis1 = kuis1::create($request->all());
        return response()->json(['message' => 'nilai add successfully.', 'kuis1' =>  $kuis1 ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(kuis1 $kuis1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kuis1 $kuis1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kuis1 $kuis1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kuis1 $kuis1)
    {
        //
    }
}
