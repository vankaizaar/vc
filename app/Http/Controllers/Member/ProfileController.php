<?php

namespace App\Http\Controllers\Member;

use App\Models\Member\Member;
use App\Models\Member\MemberProfile;
use App\Models\Member\MemberAvatar;
use App\Models\Member\MemberCover;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Members\StoreMemberProfile;
use Uuid;
use Auth;

class ProfileController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $id = Auth::guard('web_member')->user()->id;
        return view('member.profile.index')
                        ->with('profile', MemberProfile::where('member_id', $id)->first())
                        ->with('avatar', MemberAvatar::where('member_id', $id)->first())
                        ->with('cover', MemberCover::where('member_id', $id)->first())
                        ->with('member', Auth::guard('web_member')->user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('member.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMemberProfile $request) {


        $memberid = Auth::guard('web_member')->user()->id;
        //dd(Auth::guard('web_member')->user()->memberprofile());
        Auth::guard('web_member')->user()->profile()->create([
            'member_id' => $memberid,            
            'dob' => date("Y-m-d", strtotime($request->dob)),
            'country' => $request->country,
            'city' => $request->city,
            'telephone' => $request->telephone,
            'gender' => $request->gender
        ]);

        if ($request['gender']) {
            $avatar = 'public/defaults/avatars/male.svg';
        } else {
            $avatar = 'public/defaults/avatars/female.svg';
        }

        $cover = 'public/defaults/covers/cover.jpg';

        Auth::guard('web_member')->user()->avatar()->create([
            'member_id' => $memberid,
            'link' => $avatar
        ]);

        Auth::guard('web_member')->user()->cover()->create([
            'member_id' => $memberid,
            'link' => $cover
        ]);


        return redirect('memberprofile')->with('success', 'Profile created ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member\MemberProfile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(MemberProfile $profile) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member\MemberProfile  $memberprofile
     * @return \Illuminate\Http\Response
     */
    public function edit(MemberProfile $memberprofile) {

        
        
        return view('member.profile.edit')
                        ->with('member', $memberprofile);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member\MemberProfile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MemberProfile $profile) {
        Auth::guard('web_member')->user()->profile()->update([
            'dob' => date("Y-m-d", strtotime($request->dob)),
            'country' => $request->country,
            'city' => $request->city,
            'telephone' => $request->telephone,           
            'gender' => $request->gender
        ]);
        return redirect('memberprofile')->with('success', 'Profile updated. ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member\MemberProfile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberProfile $profile) {
        //
    }

}
