<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['id','name','phone','email','address','password','create_by','update_by','delete_by','delete_at','create_at','update_at'];

    public function viewProject ()
    {
        return $this->hasMany('App\Models\Project','customer_id','id');
    }

    public function writeFeedback ()
    {
        return $this->hasMany(Feedback::class);
    }

    public function viewRole ()
    {
        return $this->belongsTo(Role::class);
    }
}
