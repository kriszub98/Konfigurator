<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class component extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo_path',
        'price',
        'is_produced',
        'type_id',
    ];

    public function properties()
    {
        return $this->belongsToMany(\App\Models\Property::class);
    }
    
    public function type() {
        return $this->belongsTo(\App\Models\Type::class);
    }

    public function requirements() {
        return $this->belongsToMany(\App\Models\Requirement::class);
    }
}
