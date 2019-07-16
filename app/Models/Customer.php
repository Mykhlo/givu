<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;    

    protected $fillable = [
        'user_id',
        'name', 
        'birthday',        
        'parental_status',
        'income',
        'languages',
        'education',
    ];

    /**
     * Get the user record associated with the customer.
     */
    public function user()
    {        
        return $this->belongsTo('App\Models\User')->withTimeStamps();
    }

    /**
     * The categories that belongs to the customer.
     */
    public function favourites()
    {
        return $this->belongsToMany('App\Models\OrgCategory', 'favourites', 'customer_id', 'org_category_id');
    }

    /**
     * The Target items that belongs to customer.
     */
    public function target_items()
    {
        return $this->hasMany('App\Models\TargetItem');
    }


    /**
     * The Parental status that belongs to customer.
     */
    public function parental_status()
    {
        return $this->hasOne('App\Models\ParentalStatus');
    }

    /**
     * The Income that belongs to customer.
     */
    public function income()
    {
        return $this->hasOne('App\Models\Income');
    }

    /**
     * The gender that belongs to customer.
     */
    public function gender()
    {
        return $this->hasOne('App\Models\Gender');
    }

    /**
     * The Languages that belongs to customer.
     */
    public function languages()
    {
        return $this->hasMany('App\Models\Languages');
    }

    /**
     * The Languages that belongs to customer.
     */
    public function education()
    {
        return $this->hasMany('App\Models\Education');
    }

}
