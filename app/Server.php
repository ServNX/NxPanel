<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function firewalls()
    {
        return $this->hasMany(Firewall::class);
    }

    public function ips()
    {
        return $this->hasMany(Ip::class);
    }
}
