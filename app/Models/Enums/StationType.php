<?php

namespace App\Models\Enums;

enum StationType: string
{
    case Bedah = 'Bedah';
    case Obgyn = 'Obgyn';
    case Anak = 'Anak';
    case Interna = 'Interna';
    case Neurologi = 'Neurologi';
    case Dermatovenerology = 'Dermatovenerology';
    case THT = 'THT';
    case Mata = 'Mata';
    case Jiwa = 'Jiwa';
    case Anestesi = 'Anestesi';
    case Radiologi = 'Radiologi';
    case Paru = 'Paru';
}
