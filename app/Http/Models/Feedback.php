<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    protected $fillable = ['id','customer_id','content','delete_at','create_at','update_at'];

    public function viewByCustomer ()
    {
        return $this->belongsTo (Customer::class);
    }
}
