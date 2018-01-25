<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * @var string
     */
    protected $table = 'customer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'bank_account_number',
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
