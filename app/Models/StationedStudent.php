<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationedStudent extends Model
{
    use HasFactory;

    protected $casts = [
        'grade_deadline' => 'date',
        'status' => StationedStudentStatus::class,
    ];

    public function assignedStation()
    {
        return $this->belongsTo(Stationed::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

enum StationedStudentStatus: string
{
    case New = 'new';
    case Grading = 'grading';
    case Done = 'done';
}
