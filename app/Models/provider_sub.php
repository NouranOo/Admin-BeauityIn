<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
class provider_sub extends Model
{
    //
    protected $table="provider_subs";

    protected $fillable =[
        'id','name','price' ,'provider_id' 
    ];
    protected $hidden=array('created_at','updated_at');
 
   
    public function providers(){
        return $this->hasMany('App\Models\Provider');
    }
}
