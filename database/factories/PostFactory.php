<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    public function definition(): array
    {
        return [
            'user_id'    => User::factory(),
            'title'      => ucfirst($this->faker->words(4, true)), // string
            'body'       => ucfirst($this->faker->sentences(4, true)), // string
            'created_at' => $this->faker->dateTimeBetween('-30 days', now()),
        ];
    }
}
