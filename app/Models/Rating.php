<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'set_id',
        'rate',
    ];

    public function set() {
        return $this->belongsTo(\App\Models\Set::class);
    }
}
