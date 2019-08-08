<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['id','employee_id','content','time','delete_at','create_at','update_at'];
   
    public function users ()
    {
        return $this->belongsTo(User::class);
    }

    public function reports ()
    {
        return $this->belongsToMany(Report::class)->withPivot('note')->withTimestamps();
    }
}
