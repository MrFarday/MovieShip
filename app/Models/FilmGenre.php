<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmGenre extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function film()
    {
        return $this->belongsTo(Film::class, 'film_id');
    }
}
