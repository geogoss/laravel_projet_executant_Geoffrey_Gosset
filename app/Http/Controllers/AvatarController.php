<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Http\Requests\StoreAvatarRequest;
use App\Http\Requests\UpdateAvatarRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars = Avatar::all();
        return view('pages.avatar', compact('avatars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        $this->authorize('avatar', Auth::user());
        return view('pages.createAvatar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAvatarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAvatarRequest $request)
    {
        $avatar = new Avatar();
        $avatar->name = $request->name;
        $avatar->src = $request->file('src')->hashName();
        Storage::put('public', $request->file('src'));
        $avatar->save();
        return redirect('/avatar')->with('success', 'Avatar Créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show(Avatar $avatar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function edit(Avatar $avatar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAvatarRequest  $request
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAvatarRequest $request, Avatar $avatar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avatar $avatar)
    {
        $this->authorize('admin');
        $pokemons = array('pokemon1.jpg', 'pokemon2.jpg', 'pokemon3.jpg', 'pokemon4.jpg', 'pokemon5.jpg');
        if (!(in_array($avatar->src, $pokemons))) {
            Storage::delete('public/'.$avatar->src);
        } 
        $avatar->delete();
        return redirect()->back()->with('danger', 'Avatar supprimé');
    }
}
