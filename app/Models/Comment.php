<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'set_id',
        'user_id',
        'content',
    ];

    public function user() {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function set() {
        return $this->belongsTo(\App\Models\Set::class);
    }
}
