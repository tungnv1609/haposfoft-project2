<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['id','name','phone','email','address','password','create_by','update_by','delete_by','delete_at','create_at','update_at'];

    public function viewTask()
    {   
        return $this->hasMany(Task::class);
    }

    public function writeReport()
    {   
        return $this->hasMany(Report::class);
    }

    public function viewRole ()
    {
        return $this->belongsToMany(Role::class);
    }

    public function viewProject ()
    {
        return $this->belongsToMany(Project::class);
    }
}
