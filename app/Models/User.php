<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App\Models
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'username', 'email', 'password',
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

    /**
     * Get user's first and last name as a string if available, otherwise get their email.
     *
     * @return string
     */
    public function getFullName() {
        $fullname = trim($this->first_name . ' ' . $this->last_name);
        return ( $fullname ? $fullname : $this->email );
    }

    /**
     * Get user's username if it exists, otherwise get their full name.
     *
     * @return string
     */
    public function getDisplayName() {
        return ( trim($this->username) ? $this->username : $this->getFullName() );
    }
}
