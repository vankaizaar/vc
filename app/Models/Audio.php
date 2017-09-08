<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;


class Audio extends Model
{
    use Filterable;
    protected $fillable = ['link', 'artist_id', 'title','type','language','about_sample'];
    protected $hidden = ['id','artist_id','updated_at','created_at'];

    public function artist() {
        return $this->belongsTo('App\Models\Artist');
    }
}
