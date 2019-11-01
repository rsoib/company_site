<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;



    public function articles(){

        return $this->hasMany('App\Blog');
    }


    public function roles(){

        return $this->belongsToMany('App\Role','role_user');

    }




    protected $fillable = [
        'name', 'email', 'password',
    ];

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


     public function canDo($permission, $require = FALSE){

        if (is_array($permission)) {

            foreach ($permission as $permName) {

                  $permName = $this->canDo($permName);
                //Если один правил из массива будет совпадат
                  if ($permName && !$require) {
                        return TRUE;
                   }
                // Если ни один из правил нету
                   elseif (!$permName && $require) {
                       return FALSE;
                   }
            }

            return $require;

        }else{
            foreach ($this->roles as $role) {
                 foreach ($role->perms as $perm) {
                     if (str_is($permission,$perm->name)) {
                         return TRUE;
                     }
                 }
             }
        }

    }
}
