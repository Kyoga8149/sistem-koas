<?php

namespace App\Models;

use App\Enums\StudyType;
use App\Models\Institution;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory;

    protected $casts = [
        'study_type' => StudyType::class,
        'status' => GroupStatus::class,
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function sender()
    {
        return $this->belongsTo(Institution::class, 'sender_id');
    }

    public function students()
    {
        return $this->hasManyThrough(Student::class, GroupStudent::class);
    }

    public function assignedStations()
    {
        return $this->hasMany(Stationed::class);
    }
}

enum GroupStatus: string
{
    case New = 'new';
    case StudentAssigned = 'student_assigned';
    case StationsScheduled = 'stations_scheduled';
    case Ready = 'ready';
    case Started = 'started';
    case Finished = 'finished';
    case StudensReturned = 'students_returned';
}
