<?php

namespace App\Http\Controllers\Model;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Model\ModelUser;
use App\Models\Model\ModelProfile;
use App\Models\Model\ModelAvatar;
use App\Models\Model\ModelCover;

class ArtistController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        return Model::filter($request->all())->with('cover')->with('avatar')->with('profile')->with('audio')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Model $model) {
        $member_id = Auth::guard('web_member')->user()->id;
        $model_id = $model->id;

        return view('member.artist.show')
                        ->with('member_id', $member_id)
                        ->with('model_id', $model_id)
                        ->with('model', $model);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    public function searchActiveModels(Request $request) {
        $models = Model::filter($request->all())->paginateFilter(10);
        return view('member.artist.index')
                        ->with('artists', $artists);
    }

}
