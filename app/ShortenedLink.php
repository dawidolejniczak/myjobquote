<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortenedLink extends Model
{
    protected $fillable = [
        'original_url', 'shortened_link',
    ];
}
