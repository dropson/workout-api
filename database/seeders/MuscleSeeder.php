<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Muscle;
use Illuminate\Database\Seeder;

final class MuscleSeeder extends Seeder
{
    public function run(): void
    {
        $muscles = [
            ['slug' => 'chest', 'is_front' => true, 'name' => 'Chest'],
            ['slug' => 'biceps', 'is_front' => true, 'name' => 'Biceps'],
            ['slug' => 'shoulders', 'is_front' => true, 'name' => 'Shoulders'],
            ['slug' => 'abdominals', 'is_front' => true, 'name' => 'Abdominals'],
            ['slug' => 'obliques', 'is_front' => true, 'name' => 'Obliques'],
            ['slug' => 'forearms', 'is_front' => true, 'name' => 'Forearms'],
            ['slug' => 'quadriceps', 'is_front' => true, 'name' => 'Quadriceps'],
            // back
            ['slug' => 'traps', 'is_front' => false, 'name' => 'Traps'],
            ['slug' => 'back', 'is_front' => false, 'name' => 'Back'],
            ['slug' => 'triceps', 'is_front' => false, 'name' => 'Triceps'],
            ['slug' => 'glutes', 'is_front' => false, 'name' => 'Glutes'],
            ['slug' => 'hamstrigs', 'is_front' => false, 'name' => 'Hamstrigs'],
            ['slug' => 'calves', 'is_front' => false, 'name' => 'Calves'],
        ];

        foreach ($muscles as $data) {
            Muscle::updateOrCreate([
                'slug' => $data['slug'],
            ], $data);
        }
    }
}
