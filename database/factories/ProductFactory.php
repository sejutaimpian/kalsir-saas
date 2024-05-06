<?php

namespace Database\Factories;

use App\Models\Type;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $typeId = Type::all()->pluck('id');
        $unitId = Unit::all()->pluck('id');

        return [
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'type_id' => fake()->randomElement($typeId),
            'unit_id' => fake()->randomElement($unitId),
            'price' => fake()->numberBetween(1000, 100000),
        ];
    }
}
