<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Virus extends Model
{


  public function user()
  {
      return $this->belongsTo('App\User')->first();
  }
}
