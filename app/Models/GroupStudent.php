<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupStudent extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => GroupStudentStatus::class,
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

enum GroupStudentStatus: string
{
    case Incomplete = 'incomplete_data';
    case Verifying = 'verifying';
    case Complete = 'complete_data';
}
