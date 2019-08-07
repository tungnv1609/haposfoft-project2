<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';
    protected $fillable = ['id','employee_id','note','delete_at','created_at','updated_at'];

    public function users ()
    {
        return $this->belongsTo(User::class);
    }

    public function tasks ()
    {
        return $this->belongsToMany(Task::class,'task_report');
    }
}
