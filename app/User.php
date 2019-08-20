<?php

namespace App;

use App\HasPermissionsTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,HasPermissionsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = ['department_id','name', 'phone', 'email','address', 'password', 'avatar', 'level'];
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

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function roleUsers()
    {
        return $this->hasMany(RoleUser::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class)->withPivot('start_date', 'end_date')->withTimestamps();
    }

    public function departments()
    {
        return $this->belongsTo(Department::class);
    }

    public function pemissions ()
    {
        return $this->hasMany(Permission::class);
    }
}
