<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['id','customer_id','name','deteil','create_by','update_by','delete_by','delete_at','created_at','udatedat'];

    public function doForCustomer ()
    {
        return $this->belongsTo ('App\Models\Customer','customer_id','id');
    }

    public function doByEmployee ()
    {
        return $this->belongsToMany(Employee::class);
    }
}
