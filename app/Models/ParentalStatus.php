<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentalStatus extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * The Сustomers that are belongs to Parental Status.
     */
    public function customers()
    {
        return $this->hasMany('App\Models\Customer');
    }
}
