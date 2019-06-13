<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;    

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
    ];

    /**
     * Get the user record associated with the customer.
     */
    public function user()
    {        
        return $this->belongsTo('App\Models\User')->withTimeStamps();
    }

    /**
     * The categories that belong to the user.
     */
    public function favourites()
    {
        return $this->belongsToMany('App\Models\OrgCategory', 'favourites', 'customer_id', 'org_category_id');
    }
}
