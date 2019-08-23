<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DnsType extends Model
{
    public function records()
    {
        return $this->hasMany(DnsRecord::class);
    }

    public function dns()
    {
        return $this->hasManyThrough(Dns::class, DnsRecord::class);
    }
}
