<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'is_public'
    ];

    public function components() {
        return $this->belongsToMany(\App\Models\Component::class);
    }

    public function user() {
        return $this->belongsTo(\App\Models\User::class);
    }
}
