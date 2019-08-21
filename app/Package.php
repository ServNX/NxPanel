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

    public function web_template()
    {
        return $this->belongsTo(Template::class);
    }

    public function dns_template()
    {
        return $this->belongsTo(Template::class);
    }

    public function backend_template()
    {
        return $this->belongsTo(Template::class);
    }
}
