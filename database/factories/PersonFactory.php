<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'person_id' => fake()->numberBetween(10,499),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'state' => fake()->state(),
            'zipcode' => fake()->postcode(),
            'country' => fake()->country(),
            'phone' => fake()->tollFreePhoneNumber(),
            'comment' => fake()->realTextBetween(100,600)
        ];
    }
}
