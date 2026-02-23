<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Muscle extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'is_front',
    ];

    protected function casts(): array
    {
        return [
            'is_front' => 'bool',
        ];
    }
}
