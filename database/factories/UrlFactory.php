<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use function count;
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
        $placeholderUrls = [
            'https://idomo.site',
            'https://gallery.idomo.site',
            'https://sandler.idomo.site',
            'https://blogi.idomo.site',
            fake()->url()
        ];
        // Get a random url placeholder each time
        $randomIndex = fake()->numberBetween(0, count($placeholderUrls)-1);

        return [
            'expanded' => $placeholderUrls[$randomIndex],
            'shortened' => fake()->unique()->regexify('[A-Za-z0-9]{10}'),
        ];
    }
}
