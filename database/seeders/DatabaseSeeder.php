<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Film;
use App\Models\FilmGenre;
use App\Models\User;
use App\Models\Genre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ])

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@gmail.com',
            'password' => 'test'
        ]);

        Genre::create([
            'name' => 'Action',
        ]);

        Genre::create([
            'name' => 'Adventure',
        ]);

        Genre::create([
            'name' => 'Comedy',
        ]);

        Genre::create([
            'name' => 'Crime',
        ]);

        Genre::create([
            'name' => 'Drama',
        ]);

        Genre::create([
            'name' => 'Fantasy',
        ]);

        Genre::create([
            'name' => 'Historical',
        ]);

        Genre::create([
            'name' => 'Horror',
        ]);

        Film::create([
            'title' => 'The Shawshank Redemption',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti itaque aliquid maiores inventore odio quibusdam nostrum laboriosam et, voluptatum quos tempore odit consequuntur alias labore ex eius debitis aspernatur minima veniam ad reiciendis vero sapiente earum quasi? Facere placeat error, autem fugit laborum aperiam ad possimus nostrum, nesciunt iste beatae?',
            'release_year' => 1994,
            'length' => 142,
            'rating' => 'R',
            'thumbnail' => 'https://moenime.com/wp-content/uploads/2023/09/migi-and-dali-anime-key-visual-e1693195618953-640x360.jpg.webp',
            'last_update' => now(),
            'user_id' => 1,
        ]);

        Film::create([
            'title' => 'The Godfather',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti itaque aliquid maiores inventore odio quibusdam nostrum laboriosam et, voluptatum quos tempore odit consequuntur alias labore ex eius debitis aspernatur minima veniam ad reiciendis vero sapiente earum quasi? Facere placeat error, autem fugit laborum aperiam ad possimus nostrum, nesciunt iste beatae?',
            'release_year' => 1972,
            'length' => 175,
            'rating' => 'R',
            'thumbnail' => 'https://moenime.com/wp-content/uploads/2023/09/migi-and-dali-anime-key-visual-e1693195618953-640x360.jpg.webp',
            'last_update' => now(),
            'user_id' => 1,
        ]);

        Film::create([
            'title' => 'The Dark Knight',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti itaque aliquid maiores inventore odio quibusdam nostrum laboriosam et, voluptatum quos tempore odit consequuntur alias labore ex eius debitis aspernatur minima veniam ad reiciendis vero sapiente earum quasi? Facere placeat error, autem fugit laborum aperiam ad possimus nostrum, nesciunt iste beatae?',
            'release_year' => 2008,
            'length' => 152,
            'rating' => 'PG-13',
            'thumbnail' => 'https://moenime.com/wp-content/uploads/2023/09/migi-and-dali-anime-key-visual-e1693195618953-640x360.jpg.webp',
            'last_update' => now(),
            'user_id' => 1,
        ]);

        FilmGenre::create([
            'film_id' => 1,
            'genre_id' => 5,
        ]);

        FilmGenre::create([
            'film_id' => 1,
            'genre_id' => 7,
        ]);

        FilmGenre::create([
            'film_id' => 2,
            'genre_id' => 4,
        ]);

        FilmGenre::create([
            'film_id' => 2,
            'genre_id' => 5,
        ]);

        FilmGenre::create([
            'film_id' => 3,
            'genre_id' => 1,
        ]);

        FilmGenre::create([
            'film_id' => 3,
            'genre_id' => 4,
        ]);

        FilmGenre::create([
            'film_id' => 3,
            'genre_id' => 5,
        ]);

        FilmGenre::create([
            'film_id' => 3,
            'genre_id' => 7,
        ]);

        FilmGenre::create([
            'film_id' => 3,
            'genre_id' => 8,
        ]);
    }
}
