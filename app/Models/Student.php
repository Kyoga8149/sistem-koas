<?php

namespace App\Models;

use App\Enums\StudyType;
use App\Models\Enums\StudentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $casts = [
        'study_type' => StudyType::class,
        'status' => StudentStatus::class,
    ];

    protected $attributes = [
        'status' => StudentStatus::New,
        'study_type' => StudyType::Clerkship,
    ];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
