<?php

namespace App\Http\Controllers\API\V1\Exercise;

use App\Filters\ExerciseFilter;
use App\Http\Controllers\Controller;
use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index(ExerciseFilter $filter)
    {
        $exercises = Exercise::with(['muscles', 'equipment'])
            ->filter($filter)
            ->latest()
            ->paginate(20);

        return response()->json($exercises);
    }
}
