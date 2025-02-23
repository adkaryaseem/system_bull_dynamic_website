<?php

namespace App\Http\Controllers;

use App\Models\PhotoGallery;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function index()
    {
        $photos = PhotoGallery::get();
        return view('backend.photogallery.index',compact('photos'));
    }

    public function create()
    {
        return view('backend.photogallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "image" => "required|mimes:png,jpg,webp,jpeg",
            "title" => "required"
        ]);
        $image = $request->file("image")->store("images/gallery/photos","public");
        PhotoGallery::create([
            "title" => $request->title,
            "images" => $image
        ]);
        session()->flash('message', 'Photos added Succesfully');
        return redirect()->route("admin.photo.gallery.index");
    }

    public function edit($id){
        $photo = Photogallery::where("id", "=", $id)->first();
        return view('backend.photogallery.edit',compact('photo'));
    }

    public function update(Request $request, $id){
        $photo = PhotoGallery::where("id", "=", $id)->first();
        $images = $request->file("image")->store('images/gallery/photos','public');
        $imagepath = storage_path('app/public/'.$photo->images);
        if(file_exists($imagepath)){
            unlink($imagepath);
        }
    $photo->update([
            "title"=>$request->title,
            "images"=>$images
        ]);
        return redirect()->route('admin.photo.gallery.index');
    }

    public function delete($id){
        PhotoGallery::where("id", "=", $id)->delete();
        return redirect()->route('admin.photo.gallery.index');
    }
}

