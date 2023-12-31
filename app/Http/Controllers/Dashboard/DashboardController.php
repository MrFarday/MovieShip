<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function films()
    {
        $films = Film::all();
        return view('dashboard.film.index', compact('films'));
    }

    public function create()
    {
        return view('dashboard.film.create');
    }

    public function store(Request $request)
    {
        $film = Film::create([
            'title' => $request->title,
            'description' => $request->description,
            'release_year' => $request->release_year,
            'length' => $request->length,
            'rating' => $request->rating,
            'user_id' => Auth::user()->id
        ]);

        if ($film) {
            return redirect()->route('dashboard.film.show', $film->id);
        }

        return view('dashboard.films');
    }

    public function show($id)
    {
        $film = Film::where('id', $id)->first();
        return view('dashboard.film.show', compact('film'));
    }

    public function edit($id)
    {
        $film = Film::where('id', $id)->first();
        return view('dashboard.film.edit', compact('film'));
    }

    public function update(Request $request, Film $film)
    {

        $film->update([
            'title' => $request->title,
            'description' => $request->description,
            'release_year' => $request->release_year,
            'length' => $request->length,
            'rating' => $request->rating,
            'user_id' => Auth::user()->id,
        ]);

        return view('dashboard.film.show', compact('film'));
    }

    public function destroy($id)
    {
        $film = Film::where('id', $id)->first();
        $film->delete();
        return redirect()->route('dashboard.films');
    }
}
