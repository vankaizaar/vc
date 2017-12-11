<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Model;

class ModelBillingInfo extends Model
{
    //1 - 1 Relation to model
    public function model() {
        return $this->belongsTo('App\Models\Model\Model');
    }
}
