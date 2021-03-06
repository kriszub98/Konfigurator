<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function predefined() {
        return $this->belongsToMany(\App\Models\Predefined::class);
    }

    public function components() {
        return $this->hasMany(\App\Models\Component::class);
    }
}
