<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        return view('album/index', ['albums'=>$albums]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'albumimage' => 'required',
            
        ]);

        $album = new Album();
        $uploadImg = $album->albumimage = $request->file('albumimage');
        $path = Storage::disk('s3')->putFile('/albums', $uploadImg, 'public');
        $album->albumimage = Storage::disk('s3')->url($path);
        $album->title = $request->title;
        $album->text = $request->text;
        $album->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::with('photos')->find($id);
        return view('album.show')->with('album',$album);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::find($id);
        return view('album.edit' , ['album'=>$album]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'albumimage' => 'required',
            
        ]);

        $album = Album::find($id);
        $uploadImg = $album->albumimage = $request->file('albumimage');
        $path = Storage::disk('s3')->putFile('/albums', $uploadImg, 'public');
        $album->albumimage = Storage::disk('s3')->url($path);
        $album->title = $request->title;
        $album->text = $request->text;
        $album->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disk = Storage::disk('s3');
        $disk->delete($id);
        $album = Album::find($id);
        $album->delete();
        return redirect('/home');
    }
}
