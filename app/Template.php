<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    public function websites()
    {
        return $this->hasMany(Website::class);
    }
}
