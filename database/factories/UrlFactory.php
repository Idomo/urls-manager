<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use function fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Url>
 */
class UrlFactory extends Factory{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array{
        return [
            'expanded' => fake()->url(),
            'shortened' => fake()->unique()->regexify('[A-Za-z0-9]{20}'),
        ];
    }
}
