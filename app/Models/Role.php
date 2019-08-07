<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $fillable = ['id','note','create_by','update_by','delete_by','delete_at','created_at','updated_at'];
    public function users ()
    {
        return $this->belongsToMany(User::class,'user_role');
    }
}
