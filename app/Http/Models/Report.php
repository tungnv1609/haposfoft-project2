<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';
    protected $fillable = ['id','employee_id','note','delete_at','create_at','update_at'];

    public function writeByEmployee ()
    {
        return $this->belongsTo(Employee::class);
    }

    public function writeOfTask ()
    {
        return $this->belongsToMany(Task::class);
    }
}
