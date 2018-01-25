<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookTransaction extends Model
{
    /**
     * @var string
     */
    protected $table = 'book_transaction';

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

    /**
     * Get customer.
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    /**
     * Get employee who initiated transaction.
     */
    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
