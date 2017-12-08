<?php

namespace App\Http\Controllers\Model;

use Auth;
use App\Models\Model\Model;
use App\Models\Model\ModelAvatar;
use App\Models\Model\ModelCover;
use App\Models\Model\ModelProfile;
use App\Http\Requests\StoreProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\NewUserNotification;

class ProfileController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $id = Auth::guard('web_artist')->user()->id;
        return view('artist.profile.index')
                        ->with('profile', Profile::where('artist_id', $id)->first())
                        ->with('avatar', Avatar::where('artist_id', $id)->first())
                        ->with('cover', Cover::where('artist_id', $id)->first())
                        ->with('artist', Auth::guard('web_artist')->user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('artist.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfile $request) {
        $artistid = Auth::guard('web_artist')->user()->id;
        $artist = Artist::findOrFail($artistid);
        $native_language = implode(',', $request->native_language);
        $voice_categories = implode(',', $request->voice_categories);

        $request->native_language = $native_language;
        $request->voice_categories = $voice_categories;

        //dd($request->native_language);

        Auth::guard('web_artist')->user()->profile()->create([
            'artist_id' => $artistid,
            'dob' => date("Y-m-d", strtotime($request->dob)),
            'country' => $request->country,
            'city' => $request->city,
            'telephone' => $request->telephone,
            'about' => $request->about,
            'gender' => $request->gender,
            'native_language' => $request->native_language,
            'voice_categories' => $request->voice_categories,
            'project_5000_time' => $request->project_5000_time,
            'project_500_time' => $request->project_500_time,
            'project_50_time' => $request->project_50_time,
            'project_5_time' => $request->project_5_time,
            'project_5000_cost' => $request->project_5000_cost,
            'project_500_cost' => $request->project_500_cost,
            'project_50_cost' => $request->project_50_cost,
            'project_5_cost' => $request->project_5_cost
        ]);

        if ($request['gender']) {
            $avatar = 'public/defaults/avatars/male.svg';
        } else {
            $avatar = 'public/defaults/avatars/female.svg';
        }

        $cover = 'public/defaults/covers/cover.jpg';

        Auth::guard('web_artist')->user()->avatar()->create([
            'artist_id' => $artistid,
            'link' => $avatar
        ]);

        Auth::guard('web_artist')->user()->cover()->create([
            'artist_id' => $artistid,
            'link' => $cover
        ]);

        //$artist->notify(new NewUserNotification($artist));

        return redirect('profile')->with('success', 'Profile created ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile) {
        //Conversion of comma separated values to php arrays
        $native_language = explode(',', $profile->native_language);
        $voice_categories = explode(',', $profile->voice_categories);
        //Shady injection of values back to profile
        $profile->native_language = $native_language;
        $profile->voice_categories = $voice_categories;
        // dd($voice_categories);
        return view('artist.profile.edit')
                        ->with('artist', $profile);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProfile $request, Profile $profile) {
        $artistid = Auth::guard('web_artist')->user()->id;
        $native_language = implode(',', $request->native_language);
        $voice_categories = implode(',', $request->voice_categories);

        $request->native_language = $native_language;
        $request->voice_categories = $voice_categories;

        if ($request['gender']) {
            $avatar = 'public/defaults/avatars/male.svg';
        } else {
            $avatar = 'public/defaults/avatars/female.svg';
        }

        Auth::guard('web_artist')->user()->avatar()->update([           
            'link' => $avatar
        ]);

        Auth::guard('web_artist')->user()->profile()->update([
            'dob' => date("Y-m-d", strtotime($request->dob)),
            'country' => $request->country,
            'city' => $request->city,
            'telephone' => $request->telephone,
            'about' => $request->about,
            'gender' => $request->gender,
            'native_language' => $request->native_language,
            'voice_categories' => $request->voice_categories,
            'project_5000_time' => $request->project_5000_time,
            'project_500_time' => $request->project_500_time,
            'project_50_time' => $request->project_50_time,
            'project_5_time' => $request->project_5_time,
            'project_5000_cost' => $request->project_5000_cost,
            'project_500_cost' => $request->project_500_cost,
            'project_50_cost' => $request->project_50_cost,
            'project_5_cost' => $request->project_5_cost
        ]);
        return redirect('profile')->with('success', 'Profile updated. ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile) {
        //
    }

}
