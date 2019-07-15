<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesHotel extends Model
{
  public $timestamps = false;

  protected $fillable = ['date_from', 'date_to', 'guest', 'children', 'hotel_id', 'user_id', 'status'];

  protected $dateFormat = 'U';

  public function get_hotels()
  {
    return $this->hasOne('App\Hotel', 'id', 'hotel_id');
  }
}
