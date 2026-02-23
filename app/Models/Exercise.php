<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\DifficultyLevel;
use App\Enums\ExerciseType;
use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class Exercise extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'type',
        'defficulty',
    ];

    public function muscles(): BelongsToMany
    {
        return $this->belongsToMany(Muscle::class, 'exercise_muscle')
            ->withPivot('is_primary')
            ->withTimestamps();
    }

    public function equipment(): BelongsToMany
    {
        return $this->belongsToMany(Equipment::class, 'exercise_equipment')
            ->withTimestamps();
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter): Builder
    {
        return $filter->apply($builder);
    }

    protected function casts(): array
    {
        return [
            'type' => ExerciseType::class,
            'difficulty' => DifficultyLevel::class,
        ];
    }
}
