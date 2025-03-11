<?php

namespace App\Http\Controllers;

use App\Models\home_page\StudentLife;
use Illuminate\Http\Request;

class StudentLifeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentlife = StudentLife::get();
        return view('backend.home_page.student_life.index',compact('studentlife'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home_page.student_life.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "image"=>"required|mimes:png,jpg,jpeg"
        ]);

        $image = $request->file("image")->store("images/gallery/studnetlife","public");
        StudentLife::create([
            "image" => $image
        ]);

        return redirect()->route('admin.studentlife.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentLife $studentLife)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $studentlife = StudentLife::where("id","=",$id)->first();
        return view('backend.home_page.student_life.edit',compact('studentlife'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $studentlife = StudentLife::where("id","=",$id)->first();
        $image = $request->file('image')->store('images/gallery/studnetlife','public');
        $imagepath = storage_path('app/public/'.$studentlife->image);
        if(file_exists($imagepath)){
            unlink($imagepath);
        }
    $studentlife->update([
            "image"=>$image
        ]);
        return redirect()->route('admin.studentlife.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        StudentLife::where('id','=',$id)->delete();
        return redirect()->route('admin.studentlife.index');
    }
}
