<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
use Carbon\Carbon;

class ModelPicture extends Model {

    use Filterable;
    use \App\Uuids;

    public $incrementing = false;
    protected $fillable = ['link','model_user_id', 'model_album_id'];
    protected $hidden = ['id','model_user_id', 'model_album_id', 'updated_at', 'created_at'];

    //Many - 1 relation to Albums
    public function modelAlbum() {
        return $this->belongsTo('App\Models\Model\ModelAlbum');
    }
    
    //1 - 1 relation to Model
    public function modelUser() {
        return $this->belongsTo('App\Models\Model\ModelUser');
    }

}
