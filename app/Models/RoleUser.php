<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    public function users ()
    {
        return $this->belongsTo(User::class);
    }

    public function roles ()
    {
        return $this->belongsTo(Role::class);
    }
}
