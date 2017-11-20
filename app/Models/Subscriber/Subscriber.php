<?php

namespace App\Models\Subscriber;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\Subscriber\NewSubscriber;

class Subscriber extends Model {

    use \App\Uuids;
   use Notifiable;
    
     public $incrementing = false;

    protected $fillable = [
        'fullname', 'email', 'category'
    ];
    protected $hidden = [
        'email', 'id', 'updated_at', 'created_at',
    ];

}
