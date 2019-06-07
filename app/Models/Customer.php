<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
    ];

    /**
     * Get the user record associated with the customer.
     */
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

    /**
     * The categories that belong to the user.
     */
    public function favourites()
    {
        return $this->belongsToMany('App\Models\OrgCategory');
    }
}
