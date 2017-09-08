<?php

namespace App\Http\Controllers\Member;

use Auth;
use App\Models\Member\MemberCover;
use App\Models\Member\Member;
use Illuminate\Http\Request;
use App\Http\Requests\Members\StoreMemberCover;
use App\Http\Controllers\Controller;

class CoverController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $id = Auth::guard('web_member')->user()->id;
        return view('member.cover.index')
                        ->with('cover', MemberCover::where('member_id', $id)->first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('member.cover.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMemberCover $request) {
        if ($request->hasFile('link') && $request->file('link')->isValid()) {
            $cover = $request->file('link');
            Auth::guard('web_member')->user()->cover()->update([
                'link' => $cover->store('public/covers')
            ]);
            return redirect('memberprofile')->with('success', 'Cover photo updated successfully.');
        } else {
            return redirect('membercover')->with('error', 'Error uploading cover photo. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member\MembersCover  $membersCover
     * @return \Illuminate\Http\Response
     */
    public function show(MembersCover $membersCover) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member\MembersCover  $membersCover
     * @return \Illuminate\Http\Response
     */
    public function edit(MembersCover $membersCover) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member\MembersCover  $membersCover
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MembersCover $membersCover) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member\MembersCover  $membersCover
     * @return \Illuminate\Http\Response
     */
    public function destroy(MembersCover $membersCover) {
        //
    }

}
