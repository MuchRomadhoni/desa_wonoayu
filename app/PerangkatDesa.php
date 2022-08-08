<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerangkatDesa extends Model
{
    protected $fillable = ['name','title','imageprofile'];

    public function getTakeImageAttribute()
    {
        return "/storage/" . $this->image;
    }
    
}
