<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['name', 'phone', 'email', 'address'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

}