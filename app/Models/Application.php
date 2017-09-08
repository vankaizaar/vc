<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model {

    use \App\Uuids;

    public $incrementing = false;
    protected $fillable = [
        'artist_id', 'job_id', 'member_id', 'accepted', 'rejected'
    ];

    public function artist() {
        return $this->belongsTo('App\Models\Artist');
    }

    public function member() {
        return $this->belongsTo('App\Models\Member\Member');
    }

    public function job() {
        return $this->belongsTo('App\Models\Member\Job');
    }

}
