<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * The Сustomers that are belongs to Income.
     */
    public function customers()
    {
        return $this->hasMany('App\Models\Customer');
    }
}
