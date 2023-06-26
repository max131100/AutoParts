<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Part;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartFactory extends Factory
{
    protected $model = Part::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->text(40),
            'description' => $this->faker->text(250),
            'article' => (string)$this->faker->numberBetween(10000000, 99999999),
            'manufacturer_id' => Manufacturer::get()->random()->id,
            'price' => $this->faker->randomFloat(2, 0.01, 9999.99),
            'qty_on_hand' => $this->faker->numberBetween(0, 1000),
            'category_id' => Category::get()->random()->id
        ];
    }
}
