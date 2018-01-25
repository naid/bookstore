<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    /**
     * @var string
     */
    protected $table = 'library';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'neighborhood',
    ];

    /**
     * Get where repository is available.
     */
    public function bookRepository()
    {
        return $this->belongsTo('App\BookRepository');
    }
}
