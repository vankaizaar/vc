<?php

namespace App\Http\Controllers\Artist;

use Auth;
use App\Models\Artist;
use App\Models\Avatar;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAvatar;
use App\Http\Controllers\Controller;

class AvatarController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $id = Auth::guard('web_artist')->user()->id;
        return view('artist.avatar.index')
                        ->with('avatar', Avatar::where('artist_id', $id)->first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('artist.avatar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAvatar $request) {        

        if ($request->hasFile('link') && $request->file('link')->isValid()) {
            $avatar = $request->file('link');
            Auth::guard('web_artist')->user()->avatar()->update([
                'link' => $avatar->store('public/avatars')
            ]);
            return redirect('profile')->with('success', 'Profile photo updated successfully.');
        } else {
            return redirect('avatar')->with('error', 'Error uploading file. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show(Avatar $avatar) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function edit(Avatar $avatar) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avatar $avatar) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avatar $avatar) {
        //
    }

}
