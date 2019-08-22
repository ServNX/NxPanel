<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    public function firewalls()
    {
        return $this->hasMany(Firewall::class);
    }

    public function ips()
    {
        return $this->hasMany(Ip::class);
    }
}
