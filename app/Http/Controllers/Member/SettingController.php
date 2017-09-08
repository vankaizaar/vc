<?php

namespace App\Http\Controllers\Member;

use Auth;
use Hash;
use App\Models\Member\Member;
use Illuminate\Http\Request;
use App\Http\Requests\Members\StoreMemberSetting;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Show the form for updating settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member) {
        return view('member.settings.edit')
                        ->with('member', $member);
    }

    public function update(StoreMemberSetting $request, Member $member) {
        if ($request->has('new_password')) {
            $request['password'] = bcrypt($request['new_password']);
        }

        $member->update($request->all());

        return redirect('memberprofile')->with('success', 'Your settings have been updated.');
    }
}
