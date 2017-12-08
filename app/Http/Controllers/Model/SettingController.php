<?php

namespace App\Http\Controllers\Model;

use Auth;
use Hash;
use App\Models\Model\Model;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSetting;
use App\Http\Controllers\Controller;

class SettingController extends Controller {

    /**
     * Show the form for updating settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Model $model) {
        return view('artist.settings.edit')
                        ->with('model', $model);
    }

    public function update(StoreSetting $request, Model $model) {
        if ($request->has('new_password')) {
            $request['password'] = bcrypt($request['new_password']);
        }

        $name = title_case($request['name']);

        $request['name'] = $name;

        $model->update($request->all());

        return redirect('profile')->with('success', 'Your settings have been updated.');
    }

}
