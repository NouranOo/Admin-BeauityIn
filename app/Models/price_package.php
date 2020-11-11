<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
class price_package extends Model
{
    //
    protected $table="price_packages";

    protected $fillable =[
        'id','name','description' ,
    ];
    protected $hidden=array('created_at','updated_at');

  public function providers()
  {
    return $this->hasMany('App\Models\Provider');
  }
}
