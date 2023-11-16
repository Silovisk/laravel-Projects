<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Director;

class DirectorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'birth_date' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'cpf' => $this->faker->numerify('###########'),
            'gender' => $this->faker->randomElement(['M', 'F', 'X']),
            'zipcode' => $this->faker->postcode(),
            'address' => $this->faker->streetName(),
            'number' => $this->faker->buildingNumber(),
            'neighbourhood' => $this->faker->citySuffix(),
            'state' => $this->faker->state(),
            'city' => $this->faker->city(),
            'complement' => $this->faker->secondaryAddress(),
        ];
    }
}
