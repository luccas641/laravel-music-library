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
    * @param string
    */
    public function authorizeLevel($level)
    {
        return $this->inLevel($level) || 
            abort(401, 'This action is unauthorized.');
    }

    /**
    * Check one level
    * @param string $level
    */
    public function inLevel($level)
    {
        return $this->level >= $level;
    }
}
