<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ModelProfile extends Model {

    use \App\Uuids;

    public $incrementing = false;
    protected $fillable = [
        'model_user_id',
        'gender',
        'dob',
        'height',
        'weight',
        'telephone',
        'country',
        'city',
        'about',
        'model_categories',
    ];
    protected $hidden = ['id', 'model_user_id', 'updated_at', 'created_at', 'dob', 'telephone'];
    protected $dates = [
        'created_at',
        'updated_at',
        'dob'
    ];

    public function modelUser() {
        return $this->belongsTo('App\Models\Model\ModelUser');
    }

}
