<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TargetSubcategory extends Model
{
    protected $fillable = [
        'name'
    ];
    
    /**
     * Disable timestamps
     */
    public $timestamps = false;

    /**
     * Items that belongs to Target Type
     */
    public function items()
    {
        return $this->hasMany('App\Models\TargetItem');
    }
}
