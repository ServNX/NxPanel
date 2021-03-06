<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
