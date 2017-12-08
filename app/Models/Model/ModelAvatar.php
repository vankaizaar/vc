<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Model;

class ModelAvatar extends Model
{
    protected $fillable = ['link', 'model_id'];

    public function member() {
        return $this->belongsTo('App\Models\Model\Model');
    }
}
