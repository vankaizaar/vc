<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
use Carbon\Carbon;

class ModelAlbum extends Model {

    use Filterable;
    use \App\Uuids;
    public $incrementing = false;

    protected $fillable = ['model_user_id', 'title', 'type', 'about_album'];
    protected $hidden = ['id', 'model_user_id', 'updated_at', 'created_at'];

    //Many - 1 relation to Albums
    public function modelUser() {
        return $this->belongsTo('App\Models\Model\ModelUser');
    }

    //1 - Many relation to Pictures
    public function modelPicture() {
        return $this->hasMany('App\Models\Model\ModelPicture');
    }

}
