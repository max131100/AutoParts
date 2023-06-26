<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Car;
use App\Models\Part;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $cars = Car::all();
        $parts = Part::factory(200)->create();
        foreach ($parts as $part) {
            $carIds = $cars->random(rand(1, 3))->pluck('id');
            $part->cars()->attach($carIds);
        }
    }
}
