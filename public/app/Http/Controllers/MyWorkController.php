<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
class MyWorkController extends Controller
{
    //
    public function index()
    {
        return Student::all();
    }

    public function show($id)
    {
        return Student::find($id);
    }

    public function store(Request $request)
    {
        $student= Student::create($request->all());
        return $student;
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return $student;
    }

    public function delete(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return 204;
    }
}