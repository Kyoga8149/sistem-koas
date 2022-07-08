<?php

namespace App\Models;

use App\Enums\InstitutionSubType;
use App\Enums\InstitutionType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $casts = [
        'type' => InstitutionType::class,
        'subtype' => InstitutionSubType::class,
    ];

    use HasFactory;
}
