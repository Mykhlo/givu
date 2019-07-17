<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * The Сustomers that are belongs to Gender.
     */
    public function customers()
    {
        return $this->hasMany('App\Models\Customer');
    }
}
