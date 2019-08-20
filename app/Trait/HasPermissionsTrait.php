<?php
namespace App;

use App\Permission;
use App\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

Trait HasPermissionsTrait {

    public function roles() {
        return $this->belongsToMany(Role::class);

    }

    public function permissions() {
        return $this->belongsToMany(Permission::class);

    }

    public function hasRole(...$roles) {
        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }
        return false;
    }

    public function hasPermission($permission) {
        return (bool) $this->permission->where('slug', $permission->slug)->count();
    }

    protected function getAllPermission($permission)
    {
        return Permission::whereIn('slug', $permission)->get();
    }

    public function givePermissionsTo(...$permission) {
        $permission = $this->getAllPermissions($permission);
        if($permission === null) {
            return $this;
        }
        $this->permission()->saveMany($permission);
        return $this;
    }

    public function deletePermission(...$permission) {
        $permission = $this->getAllPermission($permission);
        $this->permission()->detach($permission);
        return $this;
    }
}
