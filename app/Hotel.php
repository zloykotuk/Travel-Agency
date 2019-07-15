<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //
    public function rooms()
    {
      return $this->hasMany('App\Rooms', 'id_hotel');
    }

    public function free_services()
    {
      return $this->hasMany('App\FreeServices');
    }

    public function paid_services()
    {
      return $this->hasMany('App\PaidServices');
    }

    public function slider_image()
    {
      return $this->hasMany('App\SliderImage');
    }
}
