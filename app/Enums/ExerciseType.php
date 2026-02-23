<?php

declare(strict_types=1);

namespace App\Enums;

enum ExerciseType: string
{
    case COMPOUND = 'compound';
    case ISOLATION = 'isolation';

    public static function labels(): array
    {
        return [
            self::COMPOUND->value => 'Compound',
            self::ISOLATION->value => 'Isolation',
        ];
    }
}
