<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\Teacher;
use App\Models\StationGroup;
use App\Models\Enums\StationGroupStatus;
use App\Actions\StationGroups\AssignTeacher;
use App\Enums\StudyType;
use App\Models\Enums\StationType;
use App\Models\Group;
use App\Models\Station;

class AssignTeacherTest extends TestCase
{
    public function test_can_successfully_assign_teacher()
    {
        $stationGroup = StationGroup::factory()->create([
            'teacher_id' => null,
            'start_date' => null,
            'end_date' => null,
        ]);
        $teacher = Teacher::factory()->create([
            'station_id' => $stationGroup->station_id,
        ]);
        $dateStart = Carbon::now();
        $dateEnd = Carbon::now()->addDays(1);

        $this->assertNull($stationGroup->teacher_id);
        $this->assertNull($stationGroup->start_date);
        $this->assertNull($stationGroup->end_date);

        AssignTeacher::run($stationGroup, $teacher, $dateStart, $dateEnd);

        $this->assertEquals($teacher->id, $stationGroup->teacher_id);
        $this->assertEquals($dateStart->startOfDay(), $stationGroup->start_date);
        $this->assertEquals($dateEnd->startOfDay(), $stationGroup->end_date);
        $this->assertEquals(StationGroupStatus::Scheduled, $stationGroup->status);
    }

    public function test_cannot_assign_if_teacher_station_type_is_different()
    {
        $this->expectExceptionCode(422);
        $station2 = Station::factory()->create([
            'type' => StationType::Bedah,
        ]);

        $stationGroup = StationGroup::factory()->create([
            'station_type' =>  StationType::Anak,
            'teacher_id' => null,
            'status' => StationGroupStatus::New,
        ]);
        $teacher = Teacher::factory()->create([
            'station_id' => $station2->id,
        ]);
        $dateStart = Carbon::now();
        $dateEnd = Carbon::now()->addDays(1);

        AssignTeacher::run($stationGroup, $teacher, $dateStart, $dateEnd);

        $this->assertNull($stationGroup->teacher_id);
        $this->assertEquals(StationGroupStatus::New, $stationGroup->status);
    }

    public function test_cannot_assign_if_teacher_study_type_is_different_than_group()
    {
        $this->expectExceptionCode(422);

        $group = Group::factory()->create([
            'study_type' => StudyType::Koas,
        ]);
        $station = Station::factory()->create([
            'type' => StationType::Bedah,
        ]);

        $stationGroup = StationGroup::factory()->create([
            'group_id' => $group->id,
            'station_type' => $station->type,
            'teacher_id' => null,
            'status' => StationGroupStatus::New,
        ]);

        $teacher = Teacher::factory()->create([
            'station_id' => $station->id,
            'study_type' => StudyType::Residen,
        ]);

        $dateStart = Carbon::now();
        $dateEnd = Carbon::now()->addDays(1);

        AssignTeacher::run($stationGroup, $teacher, $dateStart, $dateEnd);

        $this->assertNull($stationGroup->teacher_id);
        $this->assertEquals(StationGroupStatus::New, $stationGroup->status);
    }
}
