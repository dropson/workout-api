<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Equipment extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];
}
