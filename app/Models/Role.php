<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['id','note','create_by','update_by','delete_by','delete_at','created_at','updated_at'];

    public function roleUsers ()
    {
        return $this->belongsTo(RoleUser::class);
    }
}
