<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name','create_by'];

    public function roleUsers ()
    {
        return $this->hasMany(RoleUser::class);
    }
}
