<?php

namespace App\Actions\StationGroups;

use Lorisleiva\Actions\Concerns\AsAction;
use PDF;
use App\Models\StationGroup;
use App\Models\Student;
use App\Models\Group;
use Carbon\Carbon;

class GeneratePDFLetter
{
    use AsAction;

    public function handle()
    {
        // ...
    }

    public function makePDF($stationGroup)
    {
        
        $pdf = \App::make('dompdf.wrapper');
        $pdf = PDF::loadView('AsignedTeacherLetter', compact('stationGroup'));
        $id = uniqid();
        $path = '/storage'. $id .'.pdf';
        $pdf->save(public_path($path));
       
        return $path;
    }
}
