<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function databases()
    {
        return $this->hasMany(Database::class);
    }

    public function websites()
    {
        return $this->hasMany(Website::class);
    }

    public function dns()
    {
        $this->hasMany(Dns::class);
    }

    public function dnsRecords()
    {
        $this->hasManyThrough(DnsRecord::class, Dns::class);
    }

    public function mails()
    {
        $this->hasMany(Mail::class);
    }

    public function mailAccounts()
    {
        $this->hasManyThrough(MailAccount::class, Mail::class);
    }

    public function firewalls()
    {
        return $this->hasMany(Firewall::class);
    }
}
