<?php

declare(strict_types=1);

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

final class ExerciseFilter extends QueryFilter
{
    public function difficulty(string $value): Builder
    {
        return $this->builder->where('difficulty', $value);
    }

    public function type(string $value): Builder
    {
        return $this->builder->where('type', $value);
    }

    public function equipment(string $values): Builder
    {
        $slugs = explode(',', $values);

        return $this->builder->whereHas('equipment', function ($q) use ($slugs): void {
            $q->whereIn('slug', $slugs);
        });
    }

    public function muscles(string $values): Builder
    {
        $slugs = explode(',', $values);

        return $this->builder->whereHas('muscles', function ($q) use ($slugs): void {
            $q->whereIn('slug', $slugs);
        });
    }
}
