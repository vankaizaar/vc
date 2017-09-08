<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;


class Job extends Model {

    use \App\Uuids;
    use Filterable;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    protected $fillable = ['member_id', 'title', 'description'];
    protected $hidden = ['id','member_id','updated_at','created_at','active'];

    public function member() {
        return $this->belongsTo('App\Models\Member\Member');
    }
    
    public function application() {
        return $this->hasMany('App\Models\Application');
    }

}
