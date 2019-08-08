<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    protected $table = 'project_user';
    protected $fillable = ['id','project_id','user_id','start_date','end_date','created_at','updated_at'];

    function users ()
    {
        return $this->belongsTo(User::class);
    }

    function projects ()
    {
        return $this->belongsTo(Project::class);
    }
}
