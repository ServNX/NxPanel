<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
  public function server()
  {
    return $this->belongsTo(Server::class);
  }

  public function type()
  {
    return $this->hasOne(TemplateType::class);
  }
}
