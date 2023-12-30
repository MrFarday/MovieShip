<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('dashboard.film.store');
    }

    public function show(Film $film)
    {
        return view('dashboard.film.show');
    }

    public function edit(Film $film)
    {
        return view('dashboard.film.edit');
    }

    public function update(Request $request, Film $film)
    {
        return view('dashboard.film.update');
    }

    public function destroy(Film $film)
    {

        return view('dashboard.film.destroy');
    }
}
