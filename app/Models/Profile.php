<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Profile extends Model {

    use \App\Uuids;

    public $incrementing = false;
    protected $fillable = ['artist_id', 'gender', 'dob', 'telephone', 'country', 'city', 'about','native_language','voice_categories','project_5000_time','project_500_time','project_50_time','project_5_time','project_5000_cost','project_500_cost','project_50_cost','project_5_cost'];
    protected $hidden = ['id', 'artist_id', 'updated_at', 'created_at', 'dob', 'telephone'];
    protected $dates = [
        'created_at',
        'updated_at',
        'dob'
    ];

    public function artist() {
        return $this->belongsTo('App\Models\Artist');
    }

}
