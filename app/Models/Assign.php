<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assign extends Model
{
    protected $table = 'project_user';
    protected $fillable = [
        'project_id',
        'user_id',
        'start_date',
        'end_date',

    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
}