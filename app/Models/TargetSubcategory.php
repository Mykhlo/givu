<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TargetSubcategory extends Model
{
    protected $fillable = [
        'name'
    ];

    /**
     * Items that belongs to Target Type
     */
    public function target_items()
    {
        return $this->hasMany('App\Models\TargetItem');
    }
}
