<?php

namespace Database\Seeders;

use App\Models\Category;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $client = new Client(); // GuzzleHttp\Client
        $url = 'https://api.themoviedb.org/3/genre/movie/list?language=pt';

        $response = $client->request('GET', $url, [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI3ZDI3NTg5ZjgyODZmOGQ3Njk0MTEzNzQ1NWI2OGM5NCIsInN1YiI6IjY1NTEyMjcyZDRmZTA0MDExYjhmMzNiYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.OXResP3WbpHGcl_gyBHBZUaa1BhUSS9TfJeGpM08Mz8',
                'accept' => 'application/json',
            ],
        ]);

        $genres = json_decode($response->getBody());

        foreach ($genres->genres as $genre) {
            Category::create([
                'name' => $genre->name,
                'description' => '',
            ]);
        }
    }
}
