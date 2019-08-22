<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function databases()
    {
        return $this->hasMany(Database::class);
    }
}
