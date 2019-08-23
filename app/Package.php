<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function server()
    {
        return $this->hasOneThrough(Server::class, User::class);
    }

    public function webTemplate()
    {
        return $this->belongsTo(Template::class);
    }

    public function dnsTemplate()
    {
        return $this->belongsTo(Template::class);
    }

    public function backendTemplate()
    {
        return $this->belongsTo(Template::class);
    }
}
