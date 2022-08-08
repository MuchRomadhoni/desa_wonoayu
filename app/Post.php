<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'thumbnail'];
    // if this blog your mine, use it
    // protected $guarded = [];

    public function scopeLatestFirst()
    {
        return $this->latest()->first();
    }

    public function scopeLatestPost()
    {
        return $this->latest()->get();
    }

    public function getTakeImageAttribute()
    {
        return "/storage/" . $this->thumbnail;
    }
}
