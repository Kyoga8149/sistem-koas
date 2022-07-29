<?php

namespace App\Nova\Fields;

use App\Enums\StudyType;
use App\Models\Enums\AttachmentType;
use Laravel\Nova\Fields\Select;


class CustomField
{
    public static function selectStudyType()
    {
        return Select::make('Study Type')
            ->options([
                StudyType::Koas->value => 'Koas',
                StudyType::Residen->value => 'Residensi',
            ]);
    }

    public static function selectAttachmentType()
    {
        return Select::make('Attachment Type', 'key')
            ->options([
                AttachmentType::SuratPengantarKoas->value => 'Surat Pengantar Koas',
            ]);
    }
}
