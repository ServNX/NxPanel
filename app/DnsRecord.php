<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DnsRecord extends Model
{
    public function dns()
    {
        return $this->belongsTo(Dns::class);
    }

    public function type()
    {
        return $this->belongsTo(DnsType::class);
    }
}
