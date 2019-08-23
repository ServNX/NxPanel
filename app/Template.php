<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    public function packages()
    {
        return $this->hasMany(Package::class);
    }

    public function server()
    {
        return $this->belongsTo(Server::class);
    }

    public function type()
    {
        return $this->belongsTo(TemplateType::class);
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
