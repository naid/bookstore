<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
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
     * Get/check if user is an employee.
     */
    public function employee()
    {
        return $this->hasOne('App\Employee');
    }

    /**
     * Get/check if the user is a customer.
     */
    public function customer()
    {
        return $this->hasOne('App\Customer');
    }
}
