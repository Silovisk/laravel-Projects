<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Director;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'synopsis' => $this->faker->paragraph,
            'director_id' => Director::factory(),
            'duration' => $this->faker->randomNumber(2),
            'path_poster' => collect(File::files(public_path('storage/posters')))->random()->getFilename(),
            'path_trailer' => $this->faker->url,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Movie $movie) {
            $movie->categories()->attach(
                Category::factory()->count(3)->create()
            );
        });
    }
}
