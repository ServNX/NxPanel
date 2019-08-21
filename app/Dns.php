<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dns extends Model
{
    public function user()
    {
        return $this->hasOneThrough(User::class, Domain::class);
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}
