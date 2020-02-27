<?php

namespace App;
use App\Author;
use App\Genre;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function author() {
        return $this->belongsTo(Author::class);
    }

    public function genre() {
        return $this->belongsToMany(Genre::class);
    }
}
