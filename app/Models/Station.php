<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use StationType;

class Station extends Model
{
    use HasFactory;

    protected $attributes = [
        'name' => StationType::class,
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
