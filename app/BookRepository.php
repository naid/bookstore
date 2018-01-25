<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookRepository extends Model
{
    /**
     * @var string
     */
    protected $table = 'book_repository';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'display_name',
    ];

    /**
     * Get/check if book repository is a bookstore.
     */
    public function bookstore()
    {
        return $this->hasOne('App\Bookstore');
    }

    /**
     * Get/check if book repository is a library.
     */
    public function library()
    {
        return $this->hasOne('App\Library');
    }

    /**
     * Get/check if book repository is a kiosk.
     */
    public function kiosk()
    {
        return $this->hasOne('App\Kiosk');
    }

    /**
     * Get repository book list.
     */
    public function bookAvailability()
    {
        return $this->hasMany('App\BookAvailability');
    }

    /**
     * Get transactions.
     */
    public function bookTransaction()
    {
        return $this->hasMany('App\BookTransaction');
    }

    /**
     * Get repository employee.
     */
    public function employee()
    {
        return $this->hasMany('App\Employee');
    }
}
