<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = ['id','name','phone','email','address','password','avatar','level',];
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function roleUsers ()
    {
        return $this->hasMany(RoleUser::class);
    }

//    function projects ()
//    {
//        return $this->belongsToMany(Project::class);
//    }

    function reports ()
    {
        return $this->hasMany(Report::class);
    }

    function tasks ()
    {
        return $this->hasMany(Task::class);
    }
}
