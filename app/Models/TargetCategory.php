<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TargetCategory extends Model
{
    protected $fillable = [
        'name',
    ];    

    /**
     * Subcategories that belongs to Target Category
     */
    public function subcategories()
    {
        return $this->hasMany('App\Models\TargetSubcategory');
    }

    /**
     * Target items that belongs to Target Category
     */
    public function items()
    {
        return $this->hasMany('App\Models\TargetItem');        
    }
}


