<?php

declare(strict_types=1);

namespace App\Enums;

enum DifficultyLevel: string
{
    case BEGINNER = 'beginner';
    case INTERMEDIATE = 'intermediate';
    case ADVANCED = 'advanced';

    public static function labels(): array
    {
        return [
            self::BEGINNER->value => 'Beginner',
            self::INTERMEDIATE->value => 'Intermediate',
            self::ADVANCED->value => 'Advanced',
        ];
    }
}
