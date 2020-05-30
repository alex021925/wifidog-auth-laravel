<?php
/**
 * Created by PhpStorm.
 * User: Tabares
 * Date: 23/05/2020
 * Time: 11:37
 */

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard='admins';
    protected $table = 'admins';

    protected $fillable = [
        'name', 'email','avatar', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
