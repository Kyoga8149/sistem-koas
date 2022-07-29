<?php

namespace App\Models;

use App\Enums\StudyType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $casts = [
        'study_type' => StudyType::class,
    ];

    public function station()
    {
        return $this->belongsTo(Station::class);
    }
}
