<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Model;

class ModelCover extends Model {

    protected $fillable = ['link', 'model_id'];
 

    public function modelUser() {
        return $this->belongsTo('App\Models\Model\ModelUser');
    }

}
