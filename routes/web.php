<?php

use Illuminate\Support\Facades\Route;
use App\Actions\StationGroups\GeneratePDFLetter;


Route::get('/suratlampiran', function () {
    return view('lampiran',[
        'station' => 'THT',
        'group' => 'Grup 1',
        'student' => [
            ['name'=> 'student 1', 'nim' => '1234'],
            ['name'=> 'student 2', 'nim' => '3445'],
            ['name'=> 'student 3', 'nim' => '4556'],
            ['name'=> 'student 4', 'nim' => '5678'],
        ]
    ]);
});

Route::get('/sendresidence', [GeneratePDFLetter::class, 'makePDF']);