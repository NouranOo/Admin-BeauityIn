<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class provider_service extends Model
{
    //
    protected $table="provider_services";
    
     protected $fillable =[
        'provider_id','service_id' 
         
    ];
 
}
