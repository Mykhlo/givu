<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TargetItem extends Model
{
    protected $fillable = [
        'name'
    ];

    /**
     * Get the Category that owns the item
     */
    public function category()
    {
        return $this->belongsTo('App\Models\TargetCategory');
    }

    /**
     * Get the Subcategory that owns the item
     */
    public function subcategory()
    {
        return $this->belongsTo('App\Models\TargetSubcategory');
    }
}
