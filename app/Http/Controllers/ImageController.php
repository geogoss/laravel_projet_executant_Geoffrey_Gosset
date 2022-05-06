<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        $images = Image::all();
        $categories = Categorie::all();
        return view('pages.uploadImage', compact('images', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        $image = Image::all();
        $categories = Categorie::all();
        return view('pages.uploadImage', compact('image', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageRequest $request)
    {
        $image = new Image();
        $image->name = $request->name;
        $image->src = $request->file('src')->hashName();
        Storage::put('public', $request->file('src'));
        $image->categorie_id = $request->categorie_id;
        $image->save();
        return redirect('/image/create')->with('success', 'Image créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageRequest  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $this->authorize('admin', $image);
        $photos = array('animal1.jpg', 'animal2.jpg', 'animal3.jpg', 'animal4.jpg', 'tech1.jpg', 'tech2.jpg', 'tech3.jpg',  'voiture1.jpg', 'voiture2.jpg', 'voiture3.jpg' );
        if (!(in_array($image->src, $photos))) {
            Storage::delete('public/'. $image->src);
        }
            
        $image->delete();
        return redirect()->back()->with('danger', 'image supprimée');
    }

    public function download ($id) {
        $images = Image::find($id);
        return Storage::download('public/'. $images->src );
    }


}
