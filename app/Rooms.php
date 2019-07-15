<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    //
    public function room()
    {
      return $this->belongsTo('App\Hotel', 'id_hotel', 'id');
    }
}
