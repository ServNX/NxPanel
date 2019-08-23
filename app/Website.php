<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    public function user()
    {
        return $this->hasOneThrough(User::class, Domain::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function ip()
    {
        return $this->belongsTo(Ip::class);
    }
}
