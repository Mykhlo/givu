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
        'gender_id',      
        'parental_status_id',
        'income_id',        
        'education_id',
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
     * The Languages that belongs to customer.
     */
    public function languages()
    {
        return $this->belongsToMany('App\Models\Languages');
    }

    /**
     * The Target items that belongs to customer.
     */
    public function target_items()
    {
        return $this->belongsToMany('App\Models\TargetItem');
    }

    /**
     * Parent status to which the client belongs.
     */
    public function parental_status()
    {
        return $this->belongsTo('App\Models\ParentalStatus');
    }

    /**
     * Income to which the client belongs.
     */
    public function income()
    {
        return $this->belongsTo('App\Models\Income');
    }

    /**
     * Gender to which the client belongs.
     */
    public function gender()
    {
        return $this->belongsTo('App\Models\Gender');
    }

    /**
     * Education to which the client belongs.
     */
    public function education()
    {
        return $this->belongsTo('App\Models\Education');
    }

}
