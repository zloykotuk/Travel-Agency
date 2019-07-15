<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaidServices extends Model
{
  public function name_services()
  {
    return $this->hasOne('App\Services', 'id', 'services_id');
  }
}
