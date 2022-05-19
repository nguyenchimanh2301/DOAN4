<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Slide;

class SlideControllerr extends Controller
{
    //
    public function index()
    {
        $data = Slide::all();
        return json_encode($data);
    }
    public function get()
    {
        return Slide::all();
    }
    public function show($id)
    {
        return Slide::find($id);
    }
    public function destroy($id)
    {
        Slide::destroy($id);
    }
    public function store(Request $request)
    {
        $db = new Slide();
        $db->id_slide = $request->id_slide;
        $db->link = $request->link;
        $db->image = $request->image;
        $db->save();
    }
    public function update(Request $request, $id)
    {
          $db = Slide::findOrFail($id);
          $db->id_slide = $request->id_slide;
          $db->link = $request->link;
          $db->image = $request->image;
          $db->save();
           // $file = $request->image;

        // $extension = $file->getClientOriginalExtension();
        // $file->getRealPath();
        // $filename =time() . '.' . $extension;
        // $upload ='/upload/sanpham/';
        // $file->move($upload,$filename);
        // $db->image = $request->$file;
    }
}
