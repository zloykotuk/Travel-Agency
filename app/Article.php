<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  public function get_author()
  {
    return $this->hasOne('App\User', 'id', 'user_id');
  }

  public function get_comments()
  {
    return $this->hasMany('App\Comment', 'article_id', 'id');
  }
}
