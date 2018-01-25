<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * @var string
     */
    protected $table = 'employee';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get book info.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get book transaction.
     */
    public function bookTransaction()
    {
        return $this->hasMany('App\BookTransaction');
    }
}
