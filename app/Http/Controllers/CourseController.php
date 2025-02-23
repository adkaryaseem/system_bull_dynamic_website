<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::get();
        return view('backend.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "course" => "required",
        ]);

        Course::create([
            "name"=>$request->course,
        ]);
        session()->flash('message','Course Added');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = Course::where('id','=',$id)->first();
        return view('backend.course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $course = Course::where('id','=',$id)->first();
        $course->update([
            "name"=>$request->course
        ]);
        return redirect()->route('admin.course.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        Course::where('id','=',$id)->delete();
        return redirect()->route('admin.course.index');
    }
}
