<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['id','name','phone','email','address','password','created_by','updated_by','deleted_by','delete_at','created_at','updated_at'];

    public function projects ()
    {
        return $this->hasMany(Project::class);
    }

    public function feedbacks ()
    {
        return $this->hasMany(Feedback::class);
    }

//    public function roles ()
//    {
//        return $this->belongsTo(Role::class);
//    }
}
