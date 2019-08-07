<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    protected $fillable = ['id','customer_id','content','delete_at','created_at','updated_at'];

    public function customers ()
    {
        return $this->belongsTo (Customer::class);
    }
}
