<?php

namespace App\Http\Controllers\Artist;

use Auth;
use Hash;
use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSetting;
use App\Http\Controllers\Controller;

class SettingController extends Controller {

    /**
     * Show the form for updating settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist) {
        return view('artist.settings.edit')
                        ->with('artist', $artist);
    }

    public function update(StoreSetting $request, Artist $artist) {
        if ($request->has('new_password')) {
            $request['password'] = bcrypt($request['new_password']);
        }

        $name = title_case($request['name']);

        $request['name'] = $name;

        $artist->update($request->all());

        return redirect('profile')->with('success', 'Your settings have been updated.');
    }

}
