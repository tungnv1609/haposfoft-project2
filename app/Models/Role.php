<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name','note'];

    public function users ()
    {
        return $this->belongsToMany(User::class)->withPivot('start_date','end_date')->withTimestamps();
    }

    public function permissions ()
    {
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }
}
