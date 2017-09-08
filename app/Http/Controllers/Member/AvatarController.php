<?php

namespace App\Http\Controllers\Member;

use Auth;
use App\Models\Member\Member;
use App\Models\Member\MemberAvatar;
use Illuminate\Http\Request;
use App\Http\Requests\Members\StoreMemberAvatar;
use App\Http\Controllers\Controller;

class AvatarController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $id = Auth::guard('web_member')->user()->id;
        return view('member.avatar.index')
                        ->with('avatar', MemberAvatar::where('member_id', $id)->first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
         return view('member.avatar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMemberAvatar $request) {
        if ($request->hasFile('link') && $request->file('link')->isValid()) {
            $avatar = $request->file('link');
            Auth::guard('web_member')->user()->avatar()->update([
                'link' => $avatar->store('public/avatars')
            ]);
            return redirect('memberprofile')->with('success', 'Profile photo updated successfully.');
        } else {
            return redirect('memberavatar')->with('error', 'Error uploading file. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member\MemberAvatar  $membersAvatar
     * @return \Illuminate\Http\Response
     */
    public function show(MemberAvatar $membersAvatar) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member\MemberAvatar  $membersAvatar
     * @return \Illuminate\Http\Response
     */
    public function edit(MemberAvatar $membersAvatar) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member\MembersAvatar  $membersAvatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MembersAvatar $membersAvatar) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member\MembersAvatar  $membersAvatar
     * @return \Illuminate\Http\Response
     */
    public function destroy(MembersAvatar $membersAvatar) {
        //
    }

}
