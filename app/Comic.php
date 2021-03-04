<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
