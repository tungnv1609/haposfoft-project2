<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['name','detail','created_by','deleted_at','created_at'];

//    public function customers ()
//    {
//        return $this->belongsTo (Customer::class);
//    }
    public function tasks ()
    {
        return $this->hasMany(Task::class);
    }

    public function users ()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
