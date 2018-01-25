<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kiosk extends Model
{
    /**
     * @var string
     */
    protected $table = 'kiosk';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'main_newspaper',
    ];

    /**
     * Get where repository is available.
     */
    public function bookRepository()
    {
        return $this->belongsTo('App\BookRepository');
    }
}
