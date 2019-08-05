<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['id','employee_id','content','time','delete_at','create_at','update_at'];
   
    public function employee ()
    {
        return $this->belongsTo('App\Employee','employee_id','id');
    }

    public function report ()
    {
        return $this->belongsToMany('App\Report');
    }
}
