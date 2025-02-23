<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Introduction;

class IntroductionController extends Controller
{
    public function index(){
        $introductions = Introduction::get();
        return view('backend.introduction.index',compact('introductions'));
    }

    public function create(){
        return view('backend.introduction.create');
    }

    public function store(Request $request){
        $image = $request->file("image")->store('images','public');
        Introduction::create([
            "title"=>$request->title,
            "description"=>$request->description,
            "image"=>$image
        ]);
        return redirect()->route('admin.introduction.index');
    }

    public function edit($id){
       $introduction = Introduction::where("id", "=", $id)->first();
       return view('backend.introduction.edit', compact('introduction'));
    }

    public function update(Request $request, $id){
        $introduction = Introduction::where("id", "=", $id)->first();
        $image = $request->file("image")->store('images','public');
        $imagepath = storage_path('app/public/'.$introduction->image);
        if(file_exists($imagepath)){
            unlink($imagepath);
        }
    $introduction->update([
            "title"=>$request->title,
            "description"=>$request->description,
            "image"=>$image
        ]);
        return redirect()->route('admin.introduction.index');
    }

    public function delete($id){
        Introduction::where("id", "=", $id)->delete();
        return redirect()->route('admin.introduction.index');
    }
}
