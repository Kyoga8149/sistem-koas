<?php

namespace App\Models;

use App\Enums\StudyType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $casts = [
        'study_type' => StudyType::class,
    ];

    public function school()
    {
        return $this->belongsTo(Institution::class, 'institution_id');
    }

    public function groups()
    {
        return $this->hasMany(Group::class, GroupStudent::class);
    }
}
