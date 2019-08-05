<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    public function project ()
    {
        return $this->hasMany('App\Project','customer_id','id');
    }

    public function feedback ()
    {
        return $this->hasMany('App\Feedback','customer_id','id');
    }

    public function role ()
    {
        return $this->belongsTo('App\Role','role_id','id');
    }
}
