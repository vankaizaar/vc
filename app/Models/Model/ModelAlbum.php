<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Model;

class ModelAlbum extends Model {

    use Filterable;

    protected $fillable = ['model_id', 'title', 'type', 'about_album'];
    protected $hidden = ['id', 'model_id', 'updated_at', 'created_at'];

    //Many - 1 relation to Albums
    public function model() {
        return $this->belongsTo('App\Models\Model\Model');
    }

    //1 - Many relation to Pictures
    public function pictures() {
        return $this->hasMany('App\Models\Model\ModelPicture');
    }

}
