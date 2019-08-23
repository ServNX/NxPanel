<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
    public function dns()
    {
        return $this->hasMany(Dns::class);
    }

    public function dnsRecords()
    {
        return $this->hasManyThrough(DnsRecord::class, Dns::class);
    }

    public function websites()
    {
        return $this->hasMany(Website::class);
    }

    public function server()
    {
        return $this->belongsTo(Server::class);
    }

    public function firewalls()
    {
        return $this->hasMany(Firewall::class);
    }
}
