<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Model;

class ModelPicture extends Model {

    use Filterable;

    protected $fillable = ['link', 'model_id', 'album_id'];
    protected $hidden = ['id', 'model_id','album_id', 'updated_at', 'created_at'];

    //Many - 1 relation to Albums
    public function modelAlbum() {
        return $this->belongsTo('App\Models\Model\ModelAlbum');
    }

}
