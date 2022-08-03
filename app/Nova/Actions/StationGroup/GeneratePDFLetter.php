<?php

namespace App\Nova\Actions\StationGroup;

use App\Actions\StationGroups\AssignTeacher;
use Log;
use App\Models\Station;
use App\Models\Teacher;
use App\Models\StationGroup;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Http\Requests\NovaRequest;

class GeneratePDFLetter extends Action
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        
        $generatePDFLetter = new \App\Actions\StationGroups\GeneratePDFLetter();
        
        $path = $generatePDFLetter->makePDF($models);

        return Action::download(url($path), uniqid() . '.pdf');
    }

     /**
     * Get the displayable name of the action.
     *
     * @return string
     */
    public function name()
    {
        return ('Create Letter');
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
