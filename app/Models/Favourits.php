<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favourits extends Model
{
    protected $fillable = [
        'customer_id',
        'org_categories_id',
    ];
}
