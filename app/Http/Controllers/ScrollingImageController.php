<?php

namespace App\Http\Controllers;

use App\Models\home_page\Scrolling_Image;
use Illuminate\Http\Request;

class ScrollingImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scrollings = Scrolling_Image::get();
        return view('backend.home_page.scrolling_image.index',compact('scrollings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home_page.scrolling_image.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "image" => "required|mimes:png,jpg,jpeg"
        ]);

        $image = $request->file("image")->store("images/gallery/scrolling","public");
        Scrolling_Image::create([
            "images" => $image
        ]);
        session()->flash('message', 'Photos added Succesfully in Scrolling');
        return redirect()->route("admin.scrolling.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Scrolling_Image $scrolling_Image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $scrolling = Scrolling_Image::where('id','=',$id)->first();
        return view('backend.home_page.scrolling_image.edit',compact('scrolling'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $scrolling = Scrolling_Image::where("id", "=", $id)->first();
        $images = $request->file("image")->store('images/gallery/scrolling','public');
        $imagepath = storage_path('app/public/'.$scrolling->images);
        if(file_exists($imagepath)){
            unlink($imagepath);
        }
    $scrolling->update([
            "images"=>$images
        ]);
        return redirect()->route('admin.scrolling.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Scrolling_Image $id)
    {
        Scrolling_Image::where("id", "=", $id)->delete();
        return redirect()->route('admin.scrolling.index');
    }
}
