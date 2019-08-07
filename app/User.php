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
    protected $fillable = ['id','name','phone','email','address','password','create_by','update_by','delete_by','delete_at','create_at','update_at'];
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

    function roles ()
    {
        return $this->belongsToMany(Role::class,'user_role');
    }

    function projects ()
    {
        return $this->belongsToMany(Project::class,'assign');
    }

    function reports ()
    {
        return $this->hasMany(Report::class);
    }

    function tasks ()
    {
        return $this->hasMany(Task::class);
    }
}
