<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Album;
class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::with('Photos')->get();
        return view('albums.index')->with('albums', $albums);
    }

    public function create(){
        return view('albums.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'cover_image' => 'image|max:9999',
        ]);

        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // filename with no extention
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // get the extention
        $extentsion = $request->file('cover_image')->getClientOriginalExtension();
        //recreate the filename with a time stamp
        $filenameToStore = $filename.'_'.time().'.'.$extentsion;
            // store image
        $path = $request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);

        $album = new Album;
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $filenameToStore;

        $album->save();

        return redirect('albums')->with('success', 'ablum Created');
    }
}