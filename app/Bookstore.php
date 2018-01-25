<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookstore extends Model
{
    /**
     * @var string
     */
    protected $table = 'bookstore';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'owner_name',
    ];

    /**
     * Get where repository is available.
     */
    public function bookRepository()
    {
        return $this->belongsTo('App\BookRepository');
    }
}
