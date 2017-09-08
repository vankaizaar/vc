<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;

class MemberAvatar extends Model
{
    protected $fillable = ['link', 'member_id'];

    public function member() {
        return $this->belongsTo('App\Models\Member\Member');
    }
}
