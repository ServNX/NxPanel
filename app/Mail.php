<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
  public function domain()
  {
    return $this->belongsTo(Domain::class);
  }
}
