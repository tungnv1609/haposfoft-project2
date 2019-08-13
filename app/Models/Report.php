<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';
    protected $fillable = ['id','user_id','note'];

    public function users ()
    {
        return $this->belongsTo(User::class);
    }

    public function tasks ()
    {
        return $this->belongsToMany(Task::class)->withPivot('note')->withPivot('note')->withTimestamps();
    }
}
