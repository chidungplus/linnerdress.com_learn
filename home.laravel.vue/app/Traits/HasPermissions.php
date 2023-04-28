<?php
namespace App\Traits;

use App\Role;

trait HasPermissions
{
    protected $permissionList = null;

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        return false;
    }

    public function hasPermission($permission = null)
    {
        if (is_null($permission)) {
            return $this->getPermissions()->count();
        }

        if (is_string($permission)) {
            return $this->getPermissions()->contains('name', $permission);
        }

        return false;
    }

    public function authorizePermission($permission = null)
    {
        return $this->hasPermission($permission) ||  abort(401, 'You are not authorized to perform this action.');
    }

    private function getPermissions()
    {
        $role = $this->roles->first();
        if ($role) {
            if (! $role->relationLoaded('permissions')) {
                $this->roles->load('permissions');
            }

            $this->permissionList = $this->roles->pluck('permissions')->flatten();
        }

        return $this->permissionList ?? collect();
    }
}