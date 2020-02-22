<?php

// Location : App/

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Defining the Client Model 
 */
class Client extends Model
{
    /**
     * Defining the One to Many relation
     * Can be invoked on Client object to get the collection of related projects
     */
    public function projects ()
    {
        return $this->hasMany('App\Project');
    }
}
