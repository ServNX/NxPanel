<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateType extends Model
{
    public function templates()
    {
        return $this->hasMany(Template::class);
    }
}
