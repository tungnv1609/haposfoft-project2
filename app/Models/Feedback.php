<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    protected $fillable = ['customer_id'];

    public function customers ()
    {
        return $this->belongsTo (Customer::class);
    }
}
