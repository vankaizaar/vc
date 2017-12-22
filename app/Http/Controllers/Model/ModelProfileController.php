<?php

namespace App\Http\Controllers\Model;

use Auth;
use App\Models\Model\ModelUser;
use App\Models\Model\ModelAvatar;
use App\Models\Model\ModelCover;
use App\Models\Model\ModelProfile;
use Illuminate\Http\Request;
use App\Http\Requests\Models\StoreModelProfile;
use App\Http\Controllers\Controller;

class ModelProfileController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $modelId = Auth::guard('web_model')->user()->id;

        return view('model.profile.index')
                        ->with('modelprofile', ModelProfile::where('model_user_id', $modelId)->first())
                        ->with('modelavatar', ModelAvatar::where('model_user_id', $modelId)->first())
                        ->with('modelcover', ModelCover::where('model_user_id', $modelId)->first())
                        ->with('modeluser', Auth::guard('web_model')->user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('model.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModelProfile $request) {

        $modelId = Auth::guard('web_model')->user()->id;
        $model = ModelUser::findOrFail($modelId);
        $model_categories = implode(',', $request->model_categories);

        $request->model_categories = $model_categories;

        //dd($request->native_language);

        Auth::guard('web_model')->user()->modelProfile()->create([
            'model_user_id' => $modelId,
            'dob' => date("Y-m-d", strtotime($request->dob)),
            'country' => $request->country,
            'city' => $request->city,
            'telephone' => $request->telephone,
            'about' => $request->about,
            'gender' => $request->gender,
            'weight' => $request->weight,
            'height' => $request->height,
            'model_categories' => $request->model_categories,
        ]);

        if ($request['gender']) {
            $avatar = 'public/defaults/avatars/models/male.svg';
        } else {
            $avatar = 'public/defaults/avatars/models/female.svg';
        }

        $cover = 'public/defaults/covers/models/cover.jpg';

        Auth::guard('web_model')->user()->modelAvatar()->create([
            'model_user_id' => $modelId,
            'link' => $avatar
        ]);

        Auth::guard('web_model')->user()->modelCover()->create([
            'model_user_id' => $modelId,
            'link' => $cover
        ]);

        return redirect('modelprofile')->with('success', 'Profile created ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Model\ModelProfile  $modelProfile
     * @return \Illuminate\Http\Response
     */
    public function show(ModelProfile $modelProfile) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Model\ModelProfile  $modelProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelProfile $modelProfile, $modelId) {

        $modelprofile = $modelProfile::where('id', $modelId)->first();

        //Conversion of comma separated values to php arrays
        $model_categories = explode(',', $modelprofile->model_categories);

        //Shady injection of values back to profile
        $modelprofile->model_categories = $model_categories;


        return view('model.profile.edit')
                        ->with('modelprofile', $modelprofile);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Model\ModelProfile  $modelProfile
     * @return \Illuminate\Http\Response
     */
    public function update(StoreModelProfile $request, ModelProfile $modelProfile) {
       
        $modelId = Auth::guard('web_model')->user()->id;
        $model = ModelUser::findOrFail($modelId);
        $model_categories = implode(',', $request->model_categories);

        $request->model_categories = $model_categories;

        //dd($request->native_language);

        Auth::guard('web_model')->user()->modelProfile()->update([
            'model_user_id' => $modelId,
            'dob' => date("Y-m-d", strtotime($request->dob)),
            'country' => $request->country,
            'city' => $request->city,
            'telephone' => $request->telephone,
            'about' => $request->about,
            'gender' => $request->gender,
            'weight' => $request->weight,
            'height' => $request->height,
            'model_categories' => $request->model_categories,
        ]);

        if ($request['gender']) {
            $avatar = 'public/defaults/avatars/models/male.svg';
        } else {
            $avatar = 'public/defaults/avatars/models/female.svg';
        }

        $cover = 'public/defaults/covers/models/cover.jpg';

        Auth::guard('web_model')->user()->modelAvatar()->update([
            'model_user_id' => $modelId,
            'link' => $avatar
        ]);

        Auth::guard('web_model')->user()->modelCover()->update([
            'model_user_id' => $modelId,
            'link' => $cover
        ]);

        return redirect('modelprofile')->with('success', 'Profile created ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Model\ModelProfile  $modelProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelProfile $modelProfile) {
        //
    }

}
