<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{   
    //  array tranf to json 
    protected $casts = [
       'toppings' => 'array'
    ];
}
