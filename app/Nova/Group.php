<?php

namespace App\Nova;

use App\Enums\StudyType;
use App\Models\Enums\GroupStatus;
use App\Models\Institution;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use App\Enums\InstitutionType;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Http\Requests\NovaRequest;
use App\Nova\Institution as NovaInstitution;

class Group extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Group::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')->required(),
            Textarea::make('Description')
                ->nullable()
                ->hideFromIndex(),
            Select::make('Study Type')
                ->options([
                    StudyType::Clerkship->value => 'Koas',
                    StudyType::Residency->value => 'Residensi',
                ])->required(),
            Date::make('Start Date')
                ->default(now()->addDay())
                ->required(),
            Date::make('End Date')
                ->default(now()->addYear(2))
                ->required(),

            Hidden::make('Status')
                ->default(GroupStatus::New)
                ->showOnCreating(),
            Text::make('Status')
                ->readonly()
                ->hideWhenCreating(),

            Select::make('School', 'sender_id')
                ->options(function () {
                    return Institution::where('type', InstitutionType::School)
                        ->pluck('name', 'id');
                })
                ->showOnCreating()
                ->hideFromDetail()
                ->hideFromIndex()
                ->required(),

            HasOne::make('School', 'school', NovaInstitution::class),

            BelongsToMany::make('Students')
                ->fields(function () {
                    return [
                        Text::make('status')
                            ->default('incomplete_data')
                            ->showOnCreating(),
                    ];
                }),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
