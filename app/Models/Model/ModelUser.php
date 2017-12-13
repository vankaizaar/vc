<?php

namespace App\Models\Model;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
//Trait for sending notifications in laravel
use Illuminate\Notifications\Notifiable;
//Notification for Model
use App\Notifications\ModelUserResetPasswordNotification;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;

class ModelUser extends Authenticatable {

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
        'email', 'id', 'updated_at', 'created_at', 'password', 'remember_token',
    ];

    //Send password reset notification
    public function sendPasswordResetNotification($token) {
        $this->notify(new ModelUserResetPasswordNotification($token));
    }

    //1 - Many relation to Albums
    public function modelAlbum() {
        return $this->hasMany('App\Models\Model\ModelAlbum');
    }
    
    //1 - Many relation to Pictures
    public function modelPicture() {
        return $this->hasMany('App\Models\Model\ModelPicture');
    }

     //1 - 1 relation to Profile
    public function modelProfile() {
        return $this->hasOne('App\Models\Model\ModelProfile');
    }
    
    //1 - 1 relation to BillingInfo
    public function modelBillingInfo() {
        return $this->hasOne('App\Models\Model\ModelBillingInfo');
    }

    //1 - 1 relation to Cover
    public function modelCover() {
        return $this->hasOne('App\Models\Model\ModelCover');
    }

    //1 - 1 relation to Avatar
    public function modelAvatar() {
        return $this->hasOne('App\Models\Model\ModelAvatar');
    }

//    public function application() {
//        return $this->hasMany('App\Models\Model\ModelApplication');
//    }

}
