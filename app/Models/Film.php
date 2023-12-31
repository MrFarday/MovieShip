<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, FilmGenre::class, 'film_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
