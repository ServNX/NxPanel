<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firewall extends Model
{
    public function server()
    {
        return $this->belongsTo(Server::class);
    }

    public function ip()
    {
        return $this->belongsTo(Ip::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
