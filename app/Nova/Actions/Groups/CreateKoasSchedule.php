<?php

namespace App\Nova\Actions\Groups;

use App\Actions\Groups\CreateKoasSchedule as GroupsCreateKoasSchedule;
use App\Models\Group;
use Illuminate\Bus\Queueable;
use Laravel\Nova\Actions\Action;
use Illuminate\Support\Collection;
use Laravel\Nova\Fields\ActionFields;
use Illuminate\Queue\InteractsWithQueue;
use Laravel\Nova\Http\Requests\NovaRequest;

class CreateKoasSchedule extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = "Create Koas Schedule";

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        /** @var Group $model */
        foreach ($models as $model) {
            GroupsCreateKoasSchedule::run($model);
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
        return [];
    }
}
