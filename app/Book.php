<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * @var string
     */
    protected $table = 'book';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'book_number',
    ];

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
}
