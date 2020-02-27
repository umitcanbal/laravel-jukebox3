<?php

namespace App;
use App\Genre;
use App\Video;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function videos() {
        return $this->hasMany(Video::class);
    }

    public function genres() {
        return $this->belongsToMany(Genre::class);
    }
}
