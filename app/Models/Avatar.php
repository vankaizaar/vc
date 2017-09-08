<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $fillable = ['link', 'artist_id'];
    protected $hidden = ['id','artist_id','updated_at','created_at'];
    
    public function artist() {
        return $this->belongsTo('App\Models\Artist');
    }
}
