<?php

namespace App\Http\Controllers\Model;

use Auth;
use Hash;
use App\Models\Model\ModelUser;
use Illuminate\Http\Request;
use App\Http\Requests\Models\StoreSetting;
use App\Http\Controllers\Controller;

class SettingController extends Controller {

    /**
     * Show the form for updating settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelUser $model) {
        return view('model.settings.edit')
                        ->with('model', $model);
    }

    public function update(StoreSetting $request, ModelUser $model) {
        if ($request->has('new_password')) {
            $request['password'] = bcrypt($request['new_password']);
        }

        $name = title_case($request['name']);

        $request['name'] = $name;

        $model->update($request->all());

        return redirect('modelprofile')->with('success', 'Your settings have been updated.');
    }

}
