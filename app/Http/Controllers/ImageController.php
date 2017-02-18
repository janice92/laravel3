<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
     /*
      * Show the application dashboard
      *
      * @return\Illuminate\Http\Response
      */
    public function index()
    {
        return view('imageUpload');
    }
    
    public function upload(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time(). '.' .$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        return back()
            ->with('success', 'Image Uploaded successfully')
            ->with('path', $imageName);
    }
}
