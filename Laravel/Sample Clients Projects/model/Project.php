<?php

// Location : App/

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Defining the Project Model 
 */
class Project extends Model
{
    /**
     * Defining the One to Many (reverse) relation
     * Can be invoked on Project object to get the related Client
     */
    public function client()
    {
        return $this->belongsTo('App\Client');
    }
}
