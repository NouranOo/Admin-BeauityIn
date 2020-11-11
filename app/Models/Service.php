<?php

namespace App\Models;
 

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
     protected $fillable =[
        'id','name','type','icon','icon_64'
    ];
    protected $hidden=array('created_at','updated_at');

    public function providers(){
        return $this->belongsToMany('App\Models\Provider','provider_services');
    }
    public function subservice(){
        return $this->hasMany('App\Models\SubService');
    }
}
