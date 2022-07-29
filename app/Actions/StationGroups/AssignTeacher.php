<?php

namespace App\Actions\StationGroups;

use Carbon\Carbon;
use App\Models\Teacher;
use App\Models\StationGroup;
use App\Models\Enums\StationGroupStatus;
use Lorisleiva\Actions\Concerns\AsAction;

class AssignTeacher
{
    use AsAction;

    public function handle(StationGroup $stationGroup, Teacher $teacher, Carbon $dateStart, Carbon $dateEnd)
    {
        if ($stationGroup->group->study_type !== $teacher->study_type) {
            throw new \Exception('Teacher study type is different than group study type', 422);
        }

        if ($stationGroup->station_type !== $teacher->station->type) {
            throw new \Exception('Teacher station type is different from station group station type', 422);
        }

        $stationGroup->teacher()->associate($teacher);
        $stationGroup->station_id = $teacher->station_id;
        $stationGroup->start_date = $dateStart;
        $stationGroup->end_date = $dateEnd;
        $stationGroup->status = StationGroupStatus::Scheduled;
        $stationGroup->save();
    }
}
