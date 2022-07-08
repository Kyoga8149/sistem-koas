<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stationed extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => StationedStatus::class,
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function station()
    {
        return $this->belongsTo(Station::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function students()
    {
        return $this->hasMany(StationedStudent::class);
    }
}

enum StationedStatus: string
{
    case New = 'new';
    case Scheduled = 'scheduled';
    case InProgress = 'in_progress';
    case Done = 'done';
}
