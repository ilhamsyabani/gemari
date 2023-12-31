<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = student::all();
        return response()->json($students);
    }

    public function show($id)
    {
        $student = student::findOrFail($id);
        return response()->json($student);
    }

    public function store(Request $request)
    {
        $student = student::create($request->all());
        return response()->json(['message' => 'User is logged in successfully.', 'student' => $student ], 200);

        //return response()->json($student, 201);
    }

    public function update(Request $request, $id)
    {
        $student = student::findOrFail($id);
        $student->update($request->all());
        return response()->json($student, 200);
    }

    public function destroy($id)
    {
        student::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
