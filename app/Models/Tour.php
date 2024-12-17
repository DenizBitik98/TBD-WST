<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    // Разрешенные для массового заполнения атрибуты
    protected $fillable = [
        'name',
        'description',
        'destination',
        'price',
        'duration',
        'start_date',
        'end_date',
    ];
}

