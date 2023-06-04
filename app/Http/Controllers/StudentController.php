<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $student=Student::all();
        return $student;
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
    public function store(Request $request)
    {
        //
        $student=new Student();
        $student->name=$request->name;
        $student->address=$request->address;
        $student->mobile=$request->mobile;
        $student->school=$request->school;
        $student->refer=$request->refer;
        $student->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=Student::find($id);   
        return view('show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
           $student=Student::find($id);
           return view('edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student= Student::find($id);
        $student->name=$request->name;
        $student->address=$request->address;
        $student->mobile=$request->mobile;
        $student->school=$request->school;
        $student->refer=$request->refer;
        $student->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $student=Student::find($id);
        $student->delete();
        return redirect('/');
    }
}
