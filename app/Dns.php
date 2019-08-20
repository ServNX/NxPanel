<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dns extends Model
{
  public function domain()
  {
    return $this->belongsTo(Domain::class);
  }
}
