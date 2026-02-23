<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Equipment;
use App\Models\Exercise;
use App\Models\Muscle;
use Illuminate\Database\Seeder;

final class ExerciseSeeder extends Seeder
{
    public function run(): void
    {
        $exercisesData = require database_path('data/exercises_data.php');

        foreach ($exercisesData as $data) {
            // Create exercise
            $exercise = Exercise::updateOrCreate(
                [
                    'slug' => $data['slug'],
                ],
                [
                    'name' => $data['name'],
                    'type' => $data['type'],
                    'difficulty' => $data['difficulty'],
                ]
            );

            // attach equipment
            $equipmentIds = Equipment::whereIn('slug', $data['equipment'])->pluck('id');
            $exercise->equipment()->sync($equipmentIds);

            // attach primary muscles

            foreach ($data['primary_muscles'] as $muscleSlug) {
                $muscle = Muscle::where('slug', $muscleSlug)->first();
                if ($muscle) {
                    $exercise->muscles()->attach($muscle->id, ['is_primary' => true]);
                }
            }

            foreach ($data['secondary_muscles'] as $muscleSlug) {
                $muscle = Muscle::where('slug', $muscleSlug)->first();
                if ($muscle) {
                    $exercise->muscles()->attach($muscle->id, ['is_primary' => false]);
                }
            }
        }
    }
}
