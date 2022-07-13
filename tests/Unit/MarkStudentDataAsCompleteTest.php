<?php

namespace Tests\Unit;

use Exception;
use Tests\TestCase;
use App\Models\Student;
use App\Models\Enums\StudentStatus;
use App\Exceptions\InvalidStatusException;
use App\Actions\Students\MarkStudentDataAsComplete;

class MarkStudentDataAsCompleteTest extends TestCase
{
    public function test_cannot_proceed_if_status_is_incorrect()
    {
        foreach (StudentStatus::cases() as $status) {
            if ($status === StudentStatus::New) {
                continue;
            }
            try {
                $student = Student::factory()->create([
                    'status' => $status,
                ]);
                MarkStudentDataAsComplete::run($student);
                $this->fail("Should not be able to mark student as complete for student with status {$status->value}");
            } catch (InvalidStatusException $e) {
                $this->assertTrue(true);
            }
        }
    }

    public function test_can_proceed_if_student_data_is_complete()
    {
        /** @var Student */
        $student = Student::factory()->create([
            'status' => StudentStatus::New,
            'full_name' => '',
            'student_number' => '',
        ]);

        // cannot proceed if student data is not complete
        try {
            MarkStudentDataAsComplete::run($student);
            $this->assertTrue(false);
        } catch (Exception $e) {
            $this->assertTrue(true);
        }

        $student->full_name = 'Test';
        $student->student_number = '123';
        $student->save();
        MarkStudentDataAsComplete::run($student);

        $this->assertEquals(StudentStatus::DataComplete, $student->status);
    }
}
