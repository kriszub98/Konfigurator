<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_id',
        'property_id',
    ];

    public function type()
    {
        return $this->belongsTo(\App\Models\Type::class);
    }

    public function property()
    {
        return $this->belongsTo(\App\Models\Property::class);
    }
}
