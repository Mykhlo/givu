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
        'birthday',        
        'parental_status',
        'income',

    ];

    /**
     * Get the user record associated with the customer.
     */
    public function user()
    {        
        return $this->belongsTo('App\Models\User')->withTimeStamps();
    }

    /**
     * The categories that belongs to the user.
     */
    public function favourites()
    {
        return $this->belongsToMany('App\Models\OrgCategory', 'favourites', 'customer_id', 'org_category_id');
    }

    /**
     * The Parental status that belongs to user
     */
    public function parental_status()
    {
        return $this->hasMany('App\Models\ParentalStatus');
    }

    /**
     * The gender that belongs to user
     */
    public function gender()
    {
        return $this->hasMany('App\Models\Gender');
    }

    /**
     * The Target items that belongs to user
     */
    public function target_items()
    {
        return $this->hasMany('App\Models\TargetItem');
    }


}
