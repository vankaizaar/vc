<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class MemberProfile extends Model {

    use \App\Uuids;

    public $incrementing = false;
    protected $fillable = [
        'member_id',
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
        return $this->belongsTo('App\Models\Member\Member');
    }

}
