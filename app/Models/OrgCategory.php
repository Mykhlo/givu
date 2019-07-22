<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgCategory extends Model
{
    protected $fillable = [
        'name',
        'short_description',
        'description',
    ];

/**
 * Get the route key for the model.
 *
 * @return string
 */
public function getRouteKeyName()
{
    return 'name';
}
    
}
