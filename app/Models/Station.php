<?php

namespace App\Models;

use App\Models\Enums\StationType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $casts = [
        'type' => StationType::class,
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
