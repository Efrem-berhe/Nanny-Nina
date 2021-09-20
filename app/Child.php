<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
     /**
     * 
     * A child belogn to a parent
     * 
     * */

    public function user(){

        return $this->belogsTo('App\User'); 

    }
}
