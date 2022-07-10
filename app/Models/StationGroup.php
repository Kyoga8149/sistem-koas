<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationGroup extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => StationGroupStatus::class,
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

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}

enum StationGroupStatus: string
{
    case New = 'new';
    case Scheduled = 'scheduled';
    case InProgress = 'in_progress';
    case Done = 'done';
}
