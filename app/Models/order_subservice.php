<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order_subservice extends Model
{
    //
    protected $fillable =[
        'id','order_id','provider_subservice_id','number_peopels'
    ];
    public function order(){
        return $this->belongtoMany('App\Models\order','order_id','id');
    }
    public function provider_subservice(){
        return $this->belongsto('App\Models\provider_sub','provider_subservice_id','id');
        // return $this->hasmany('App\Models\provider_sub','id','provider_subservice_id');

    }
  
   
}
