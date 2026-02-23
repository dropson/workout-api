<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Seeder;

final class EquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'slug' => 'body_only',
                'name' => 'Bodyweight',
                'description' => 'Exercises using only your body weight',
            ],
            [
                'slug' => 'dumbebell',
                'name' => 'Dumbbell',
                'description' => 'Free weight exercises with dumbbells',
            ],
            [
                'slug' => 'barbell',
                'name' => 'Barbell',
                'description' => 'Compound movements with a barbell',
            ],
            [
                'slug' => 'kettlebells',
                'name' => 'Kettlebell',
                'description' => 'Dynamic exercises with kettlebells',
            ],
            [
                'slug' => 'bands',
                'name' => 'Band',
                'description' => 'Resistance band exercises',
            ],
            [
                'slug' => 'weight_plate',
                'name' => 'Plate',
                'description' => 'Excercises using weight plates',
            ],
            [
                'slug' => 'pull_bar',
                'name' => 'Pull-up bar',
                'description' => 'Upper body exercises with a pull-up bar',
            ],
            [
                'slug' => 'bench',
                'name' => 'Bench',
                'description' => 'Bench exercises and support',
            ],
        ];

        foreach ($items as $item) {
            Equipment::updateOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
