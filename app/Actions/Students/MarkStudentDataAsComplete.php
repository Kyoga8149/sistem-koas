<?php

namespace App\Actions\Students;

use App\Models\Student;
use App\Models\Enums\StudentStatus;
use Lorisleiva\Actions\Concerns\AsAction;
use App\Exceptions\InvalidStatusException;
use Exception;

class MarkStudentDataAsComplete
{
    use AsAction;

    public function handle(Student $student)
    {
        if ($student->status !== StudentStatus::New) {
            throw new InvalidStatusException("Status is not new");
        }

        if ($student->full_name === '' || $student->student_number === '') {
            throw new Exception("Student data is not complete", 400);
        }

        $student->status = StudentStatus::DataComplete;
        $student->save();
    }
}
