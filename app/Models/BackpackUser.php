<?php

namespace App\Models;

use App\User;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Notifications\Notifiable;
use Backpack\CRUD\app\Models\Traits\InheritsRelationsFromParentModel;
use Backpack\CRUD\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class BackpackUser extends User
{
    use InheritsRelationsFromParentModel;
    use Notifiable;
    use CrudTrait;

    protected $table = 'users';

    /**
     * Send the password reset notification.
     *
     * @param string $token
     *
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * Get the e-mail address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset()
    {
        return $this->email;
    }
    public function roles(){
        return $this->belongsToMany(Role::class,'model_has_roles','model_id','role_id');
    }
    public function permissions(){
        return $this->belongsToMany(Permission::class,'model_has_permissions','model_id','permission_id');
    }
}
