<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['id','customer_id','name','deteil','create_by','update_by','delete_by','delete_at','created_at','updated_at'];

    public function customers ()
    {
        return $this->belongsTo (Customer::class);
    }

    public function roleUsers ()
    {
        return $this->hasMany(RoleUser::class);

//        return $this->belongsToMany(Employee::class);
    }
}
