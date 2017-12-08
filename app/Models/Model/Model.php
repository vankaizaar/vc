<?php

namespace App\Models\Model;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
//Trait for sending notifications in laravel
use Illuminate\Notifications\Notifiable;
//Notification for Artist
use App\Notifications\ModelResetPasswordNotification;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;

class Model extends Authenticatable {
    use Filterable;
    use Notifiable;
    use \App\Uuids;

    public $incrementing = false;
    //Mass assignable attributes
    protected $fillable = [
        'name', 'email', 'password'
    ];
    //hidden attributes
    protected $hidden = [
        'email','id','updated_at','created_at','password', 'remember_token',
    ];

    //Send password reset notification
    public function sendPasswordResetNotification($token) {
        $this->notify(new ModelResetPasswordNotification($token));
    }

    //1 - Many relation to Audio
    public function audio() {
        return $this->hasMany('App\Models\Audio');
    }

    public function profile() {
        return $this->hasOne('App\Models\Profile');
    }

    public function cover() {
        return $this->hasOne('App\Models\Cover');
    }

    public function avatar() {
        return $this->hasOne('App\Models\Avatar');
    }
    
    public function application() {
        return $this->hasMany('App\Models\Application');
    }

}
