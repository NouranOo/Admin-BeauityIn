<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable =[
        'id','day','time','home_service',
        'note','user_id','status','provider_id','feedback'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
   
    public function OrdersubServices(){

        return $this->hasMany('App\Models\order_subservice');
    
    }
    public function provider(){
        return $this->belongsTo('App\Models\Provider','provider_id','id');

    }
}
