<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ModelBillingInfo extends Model {

    use \App\Uuids;

    public $incrementing = false;
    protected $fillable = ['model_user_id', 'project_hourly_cost', 'project_half_day_cost', 'project_full_day_cost'];
    protected $hidden = ['id', 'model_user_id', 'updated_at', 'created_at'];

    //1 - 1 Relation to model
    public function modelUser() {
        return $this->belongsTo('App\Models\Model\ModelUser');
    }

}
