<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'date',
        'description',
        'photo',
        'links',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
            'links' => 'array',
        ];
    }
}
