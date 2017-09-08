<?php

namespace App\Models\Member;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
//Trait for sending notifications in laravel
use Illuminate\Notifications\Notifiable;
//Notification for Member
use App\Notifications\MemberResetPasswordNotification;

class Member extends Authenticatable {

    use Notifiable;
    use \App\Uuids;

    public $incrementing = false;
    //Mass assignable attributes
    protected $fillable = [
        'name', 'email', 'password',
    ];
    //hidden attributes
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Send password reset notification
    public function sendPasswordResetNotification($token) {
        $this->notify(new MemberResetPasswordNotification($token));
    }

    public function profile() {
        return $this->hasOne('App\Models\Member\MemberProfile');
    }

    public function avatar() {
        return $this->hasOne('App\Models\Member\MemberAvatar');
    }

    public function cover() {
        return $this->hasOne('App\Models\Member\MemberCover');
    }

    public function job() {
        return $this->hasMany('App\Models\Member\Job');
    }

    public function application() {
        return $this->hasMany('App\Models\Application');
    }
}
