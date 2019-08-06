<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $fillable = ['id','note','create_by','update_by','delete_by','delete_at','create_at','update_at'];
    public function viewByEmployee ()
    {
        return $this->belongsToMany('App\Employee');
    }

    public function viewByCustommer ()
    {
        return $this->hasMany(Customer::class);
    }
}
