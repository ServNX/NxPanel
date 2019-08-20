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

  public function websites()
  {
    return $this->hasMany(Website::class);
  }

  public function dns()
  {
    return $this->hasMany(Dns::class);
  }
}
