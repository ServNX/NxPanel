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
}
