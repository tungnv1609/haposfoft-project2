<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['project_id','user_id','content','time'];
   
    public function users ()
    {
        return $this->belongsTo(User::class);
    }

    public function reports ()
    {
        return $this->belongsToMany(Report::class)->withTimestamps();
    }
}
