<?php

namespace App\Http\Controllers\Model;

use Auth;
use App\Models\Model\ModelUser;
use App\Models\Model\ModelCover;
use App\Http\Requests\StoreCover;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoverController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $id = Auth::guard('web_artist')->user()->id;
        return view('artist.cover.index')
                        ->with('cover', Cover::where('artist_id', $id)->first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('artist.cover.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCover $request) {
        if ($request->hasFile('link') && $request->file('link')->isValid()) {
            $cover = $request->file('link');
            Auth::guard('web_artist')->user()->cover()->update([
                'link' => $cover->store('public/covers')
            ]);
            return redirect('profile')->with('success', 'Cover photo updated successfully.');
        } else {
            return redirect('cover')->with('error', 'Error uploading cover photo. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cover  $cover
     * @return \Illuminate\Http\Response
     */
    public function show(Cover $cover) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cover  $cover
     * @return \Illuminate\Http\Response
     */
    public function edit(Cover $cover) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cover  $cover
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cover $cover) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cover  $cover
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cover $cover) {
        //
    }

}
