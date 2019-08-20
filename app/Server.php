<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
  public function firewalls()
  {
    return $this->hasMany(Firewall::class);
  }
}
