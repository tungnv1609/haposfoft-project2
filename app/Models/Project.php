<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['customer_id','name','detail'];

    public function customers ()
    {
        return $this->belongsTo (Customer::class);
    }
    public function tasks ()
    {
        return $this->hasMany(Task::class);
    }

    public function users ()
    {
        return $this->belongsToMany(User::class)->withPivot('start_date','end_date')->withTimestamps();
    }
}
