<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use Notifiable;

    //
     protected $fillable =[
        'id','email','password','name','phone','country','place_name','place_logo',
        'image','lang','late','location','link_insta','link_twitter','link_facebook','service_type','description',
        'other_information','home_service','ApiToken','Token','fb_id','go_id','tw_id','verify_code','is_verified','view'

    ];
    protected $hidden=array('created_at','updated_at');

    public function messages(){
        return $this->hasMany('App\Models\Message','provider_id');
    }

    public function favurites(){
        return $this->hasMany('App\Models\Favourite','provider_id');
    }

    public function services(){
        return $this->belongsToMany('App\Models\Service','provider_services');
    }

    public function sub_services(){
        return $this->hasmany ('App\Models\provider_sub','provider_id' );
    }
    public function orders(){
        return $this->hasMany('App\Models\Order');

    }
    public function price_package(){
      return $this->belongsTo('App\Models\price_package');
    }

}
