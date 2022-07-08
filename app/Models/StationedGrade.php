<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationedGrade extends Model
{
    use HasFactory;

    public function grading()
    {
        return $this->belongsTo(Grading::class);
    }

    public function stationedStudent()
    {
        return $this->belongsTo(StationedStudent::class);
    }
}
