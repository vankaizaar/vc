<?php

namespace App\Http\Controllers\Model;

use Illuminate\Http\Request;
use App\Models\Audio;
use Auth;
use App\Models\Model\Model;
use App\Http\Requests\StoreAudio;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class AudioController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $id = Auth::guard('web_artist')->user()->id;
        return view('artist.audio.index')
                        ->with('audio', Audio::where('artist_id', $id)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('artist.audio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAudio $request) {
        $userid = Auth::guard('web_artist')->user()->id;                        
        $file = $request->file('link');
        $extension = '.'.$file->getClientOriginalExtension();               
        $filename = md5($file->getClientOriginalName() . microtime()).$extension;     
        $destinationPath = env('fileDestinationPath') . $userid . '/' . $filename;
        $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
        if ($uploaded) {
            Auth::guard('web_artist')->user()->audio()->create([
                'user_id' => $userid,
                'link' => $destinationPath,
                'title' => $request->title,
                'type' => $request->type,
                'language' => $request->language,
                'about_sample' => $request->about_sample
            ]);
            return redirect('audio')->with('success', 'Voice over successfully uploaded. ');
        } else {
            return redirect('audio')->with('error', 'Uploading failed. ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
        dd($id);
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
        $track = Audio::where('id', $id)->first();
        $audiofile = $track->link;
        Storage::delete($audiofile);
        $track->delete();
        return redirect('audio')->with('success', 'Selected track has been deleted. ');
    }

}
