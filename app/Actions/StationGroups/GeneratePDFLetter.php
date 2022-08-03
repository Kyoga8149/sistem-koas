<?php

namespace App\Actions\StationGroups;

use Lorisleiva\Actions\Concerns\AsAction;
use PDF;
use App\Models\Group;
use App\Models\StationGroup;
use App\Models\Student;
use App\Models\Teacher;
use Carbon\Carbon;

class GeneratePDFLetter
{
    use AsAction;

    public function handle()
    {
        // ...
    }

    public function makePDF()
    {
        //$stationGroup = StationGroup::all();
       // $students = Student::with('group');
       // $group = Group::with('stationGroups');
       // $teacher = StationGroup::with('teacher');
        
        $group = Group::has('stationGroups')->get();
        $stationGroup = StationGroup::whereBelongsTo($group)->get();
        $students = Student::whereBelongsTo($group)->get();
        

       
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadView('AsignedTeacherLetter', compact('stationGroup', 'students'));
        $id = uniqid();
        $path = '/storage/tmp/invoices/'. $id .'.pdf';
        $pdf->save(public_path($path));

        return $path;

        //return view('AsignedTeacherLetter', compact('stationGroup', 'students'));
    }
}
