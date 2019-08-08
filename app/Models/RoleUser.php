<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{

    protected $table = 'role_user';
    protected $fillable = ['id','role_id','user_id','start_date','end_date','created_at','updated_at'];

    function  users ()
    {
        return $this->belongsTo(User::class);
    }

    function  roles ()
    {
        return $this->belongsTo(Role::class);
    }
}
