<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ModelProfile extends Model {

    use \App\Uuids;

    public $incrementing = false;
    protected $fillable = [
        'model_id',
        'gender',
        'dob',
        'telephone',
        'country',
        'city',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'dob'
    ];

    public function member() {
        return $this->belongsTo('App\Models\Model\Model');
    }

}
