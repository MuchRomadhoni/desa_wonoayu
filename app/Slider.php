<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded = [];

    public function getTakeImageAttribute()
    {
        return "/storage/" . $this->image;
    }
}
