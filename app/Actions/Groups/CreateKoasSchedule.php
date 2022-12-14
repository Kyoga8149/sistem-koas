<?php

namespace App\Actions\Groups;

use Exception;
use App\Models\Group;
use App\Enums\StudyType;
use App\Models\Enums\GroupStatus;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use App\Exceptions\InvalidStatusException;
use App\Models\Setting;
use App\Models\StationGroup;
use App\Models\Enums\StationGroupStatus;
use App\Models\Enums\StationType;

class CreateKoasSchedule
{
    use AsAction;

    public function handle(Group $group): Group
    {
        if ($group->status !== GroupStatus::StudentAssigned) {
            throw new InvalidStatusException("Status is not student assigned");
        }

        if ($group->study_type !== StudyType::Koas) {
            throw new InvalidStatusException("Study type is not clerkship");
        }

        DB::beginTransaction();
        try {
            // create 11 stations for the Koas Group.
            $setting = Setting::where('key', Setting::KOAS_SCHEDULE_WEEK)->first();
            if (!$setting) {
                throw new Exception("Setting for Koas schedule week not found", 500);
            }
            $koasDurationWeeks = json_decode($setting->value, false);
            foreach ($koasDurationWeeks as $stationType => $durationWeeks) {
                $stationGroup = new StationGroup([
                    'group_id' => $group->id,
                    'station_type' => StationType::from($stationType),
                    'duration_week' => $durationWeeks,
                    'status' => StationGroupStatus::New,
                ]);
                $stationGroup->save();
            }


            $group->status = GroupStatus::StationsScheduled;
            $group->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage(), 500);
        }

        return $group;
    }
}
