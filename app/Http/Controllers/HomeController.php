<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\FilmGenre;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $totalGenre = Genre::count();
        $latest = Film::latest()->take(6)->get();
        $randomNumber = rand(1, $totalGenre);
        $randGenre = Genre::where('id', '=', $randomNumber)->get();
        $fgConnection = FilmGenre::where('genre_id', $randGenre->first()->id)->inRandomOrder()->first();
        $loop = 0;
        while (!$fgConnection && $loop < 5) {
            $loop++;
            $randGenre = Genre::where('id', '=', $randomNumber)->get();
            $fgConnection = FilmGenre::where('genre_id', $randGenre->first()->id)->inRandomOrder()->first();
        }
        if (!$fgConnection) {
            $randGenre = Genre::where('id', '=', 1)->get();
            $fgConnection = FilmGenre::where('genre_id', $randGenre->first()->id)->inRandomOrder()->first();
        }
        $randFilm = Film::where('id', $fgConnection->film_id)->paginate(6);
        return view('home', compact('latest', 'randGenre', 'randFilm'));
    }
}
