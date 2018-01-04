<?php

namespace App\Http\Controllers\Model;

use Auth;
use App\Models\Model\ModelAlbum;
use App\Models\Model\ModelPicture;
use App\Models\Model\ModelUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ModelAlbumController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $modeluser = Auth::guard('web_model')->user();
        $modeluser->load('modelAlbum', 'modelPicture')->get();
      
        return view('model.album.index', compact('modeluser'));
//        return view('model.album.index')
//        ->with('modelalbums', ModelAlbum::where('model_user_id', $id)->get())
//        ->with('modelpictures', ModelPicture::where('model_user_id', $id)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('model.album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $modelid = Auth::guard('web_model')->user()->id;

        $createAlbum = Auth::guard('web_model')->user()->modelAlbum()->create([
                    'model_user_id' => $modelid,
                    'title' => $request->title,
                    'type' => $request->type,
                    'about_album' => $request->about_album
                ])->id;

        foreach ($request->file('link') as $albumImage) {

            $file = $albumImage;
            $extension = '.' . $file->getClientOriginalExtension();
            $filename = md5($file->getClientOriginalName() . microtime()) . $extension;
            $destinationPath = env('modelsDestinationPath') . $modelid . '/' . $filename;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()), 'public');
            if ($uploaded) {
                Auth::guard('web_model')->user()->modelPicture()->create([
                    'model_album_id' => $createAlbum,
                    'model_user_id' => $modelid,
                    'link' => $destinationPath
                ]);
            }
        }
        return redirect('modelalbums')->with('success', 'Album successfully uploaded. ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Model\ModelAlbum  $modelAlbum
     * @return \Illuminate\Http\Response
     */
    public function show(ModelAlbum $modelAlbum) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Model\ModelAlbum  $modelAlbum
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelAlbum $modelAlbum) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Model\ModelAlbum  $modelAlbum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelAlbum $modelAlbum) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Model\ModelAlbum  $modelAlbum
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelAlbum $modelAlbum, $id) {

        $pictures = ModelPicture::where('model_album_id', $id)->get();

        foreach ($pictures as $picture) {
            $picturefile = $picture->link;
            Storage::delete($picturefile);
        }
        $albumToDelete = $modelAlbum::findOrFail($id);

        $albumToDelete->delete();

        return redirect('modelalbums')->with('success', 'Selected album has been deleted.');
    }

}
