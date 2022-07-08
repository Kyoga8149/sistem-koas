<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    public function hospital()
    {
        return $this->belongsTo(Institution::class, 'institution_id');
    }
}
