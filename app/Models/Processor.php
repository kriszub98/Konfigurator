<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'manufacturer',
        'model',
        'socket',
        'microarchitecture',
        'clock_frequency',
        'integrated_graphic',
        'supported_memory',
        'number_of_cores',
        'number_of_threads',
        'producent_code',
        'cache_size',
        'tdp',
        'price',
        'is_produced',
    ];
}
