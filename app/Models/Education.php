<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * The Сustomers that are belongs to Education.
     */
    public function customers()
    {
        return $this->hasMany('App\Models\Customer');
    }
}
