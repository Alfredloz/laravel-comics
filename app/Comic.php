<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'desciption',
        'art_by',
        'written_by',
        'series',
        'price',
        'release_date',
        'volume',
        'trim_size',
        'page_content',
        'rating',
        'slug',
        'cover',
        'available',
        'banner'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
