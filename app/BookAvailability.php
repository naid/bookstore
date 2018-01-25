<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookAvailability extends Model
{
    /**
     * @var string
     */
    protected $table = 'book_availability';

    /**
     * Get book info.
     */
    public function book()
    {
        return $this->belongsTo('App\Book');
    }

    /**
     * Get where repository is available.
     */
    public function bookRepository()
    {
        return $this->belongsTo('App\BookRepository');
    }
}
