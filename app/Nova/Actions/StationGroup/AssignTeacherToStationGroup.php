<?php

namespace App\Nova\Actions\StationGroup;

use Log;
use App\Models\Station;
use App\Models\Teacher;
use App\Models\StationGroup;
use Illuminate\Bus\Queueable;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Actions\Action;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ActionFields;
use App\Models\Enums\StationGroupStatus;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Laravel\Nova\Http\Requests\NovaRequest;

class AssignTeacherToStationGroup extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        $teacherId = $fields->get('teacher_id');
        if (!$teacherId) {
            return Action::danger('Please select a teacher');
        }
        /** @var Teacher */
        $teacher = Teacher::find($teacherId);

        /** @var StationGroup $model */
        foreach ($models as $model) {
            $model->teacher_id = $teacher->id;
            $model->station_id = $teacher->station_id;
            $model->start_date = $fields->get('start_date');
            $model->end_date = $fields->get('end_date');
            $model->status = StationGroupStatus::Scheduled;

            $model->save();
        }
    }

    /**
     * Get the fields available on the action.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        $resourceId = data_get($request, 'resourceId');

        return [
            Select::make('Teacher', 'teacher_id')
                ->options(function () use ($resourceId) {
                    $query = DB::table('teachers')
                        ->join('stations', 'teachers.station_id', '=', 'stations.id')
                        ->join('hospitals', 'stations.hospital_id', '=', 'hospitals.id')
                        ->where('teachers.teaching_type', 'koas')
                        ->select('teachers.id', 'teachers.full_name', 'hospitals.name', 'stations.type')
                        ->orderBy('teachers.full_name', 'asc');

                    /** @var StationGroup */
                    $stationGroup = StationGroup::find($resourceId);
                    if ($stationGroup) {
                        $query->where('stations.type', $stationGroup->station_type);
                    }

                    $teacherOptions = $query->get()
                        ->map(function ($item) {
                            $item->title = sprintf('%s / %s / %s', $item->full_name, $item->name, $item->type);
                            return $item;
                        })
                        ->pluck('title', 'id')
                        ->all();
                    return $teacherOptions;
                })
                ->required(),
            Date::make('Start Date')->required(),
            Date::make('End Date')->required(),
        ];
    }
}
