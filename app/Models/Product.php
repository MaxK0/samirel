<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'weight',
        'temp_max',
        'temp_min',
        'shelf_life',
        'quantity_big',
        'quantity_medium',
        'quantity_small',
        'photo',
        'text'
    ];

    protected function casts(): array
    {
        return [
            'weight' => 'float',
        ];
    }
}
