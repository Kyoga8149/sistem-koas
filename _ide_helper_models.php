<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @property-read mixed $email
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\AdminFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUserId($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Attachment
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $attachable_type
 * @property int $attachable_id
 * @property string|null $key
 * @property string|null $url
 * @property string|null $name
 * @property string|null $size
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $attachable
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereAttachableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereAttachableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereUrl($value)
 */
	class Attachment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Grade
 *
 * @property int $id
 * @property int $station_group_id
 * @property int $student_id
 * @property string|null $competency_target
 * @property string|null $supervision_level
 * @property \Illuminate\Support\Carbon|null $grade_deadline
 * @property string|null $grade_total
 * @property string|null $grade_note
 * @property \App\Models\GradeStatus $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\StationGroup|null $assignedStation
 * @property-read \App\Models\Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|Grade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Grade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Grade query()
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereCompetencyTarget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereGradeDeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereGradeNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereGradeTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereStationGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereSupervisionLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereUpdatedAt($value)
 */
	class Grade extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Group
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \App\Enums\StudyType $study_type
 * @property int $school_id
 * @property \Illuminate\Support\Carbon $start_date
 * @property \Illuminate\Support\Carbon $end_date
 * @property \App\Models\Enums\GroupStatus $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attachment[] $attachments
 * @property-read int|null $attachments_count
 * @property-read \App\Models\School $school
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\StationGroup[] $stationGroups
 * @property-read int|null $station_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Student[] $students
 * @property-read int|null $students_count
 * @method static \Database\Factories\GroupFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Group query()
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereStudyType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Group whereUpdatedAt($value)
 */
	class Group extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Hospital
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Station[] $stations
 * @property-read int|null $stations_count
 * @method static \Database\Factories\HospitalFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereUpdatedAt($value)
 */
	class Hospital extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\School
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attachment[] $attachments
 * @property-read int|null $attachments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Group[] $groups
 * @property-read int|null $groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Student[] $students
 * @property-read int|null $students_count
 * @method static \Database\Factories\SchoolFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|School newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|School newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|School query()
 * @method static \Illuminate\Database\Eloquent\Builder|School whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|School whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|School whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|School whereUpdatedAt($value)
 */
	class School extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string $key
 * @property string $type
 * @property string $value
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereValue($value)
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Station
 *
 * @property int $id
 * @property \App\Models\Enums\StationType $type
 * @property int $hospital_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Hospital $hospital
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Teacher[] $teachers
 * @property-read int|null $teachers_count
 * @method static \Database\Factories\StationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Station newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Station newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Station query()
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereHospitalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereUpdatedAt($value)
 */
	class Station extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StationGroup
 *
 * @property int $id
 * @property \App\Models\Enums\StationType $station_type
 * @property int $group_id
 * @property int|null $station_id
 * @property int|null $teacher_id
 * @property \Illuminate\Support\Carbon|null $start_date
 * @property \Illuminate\Support\Carbon|null $end_date
 * @property int|null $duration_week
 * @property \App\Models\Enums\StationGroupStatus $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Grade[] $grades
 * @property-read int|null $grades_count
 * @property-read \App\Models\Group $group
 * @property-read \App\Models\Station|null $station
 * @property-read \App\Models\Teacher|null $teacher
 * @method static \Database\Factories\StationGroupFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|StationGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StationGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StationGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|StationGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StationGroup whereDurationWeek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StationGroup whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StationGroup whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StationGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StationGroup whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StationGroup whereStationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StationGroup whereStationType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StationGroup whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StationGroup whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StationGroup whereUpdatedAt($value)
 */
	class StationGroup extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Student
 *
 * @property int $id
 * @property int $group_id
 * @property string $full_name
 * @property string $student_number
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $notes
 * @property string|null $photo_url
 * @property string|null $file_2_url
 * @property string|null $file_3_url
 * @property string|null $file_4_url
 * @property string|null $file_5_url
 * @property string|null $file_6_url
 * @property \App\Models\Enums\StudentStatus $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attachment[] $attachments
 * @property-read int|null $attachments_count
 * @property-read \App\Models\Group $group
 * @property-read \App\Models\Attachment|null $sip
 * @method static \Database\Factories\StudentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereFile2Url($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereFile3Url($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereFile4Url($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereFile5Url($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereFile6Url($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student wherePhotoUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereStudentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereUpdatedAt($value)
 */
	class Student extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Subject
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \App\Enums\StudyType $study_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SubjectFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subject query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereStudyType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereUpdatedAt($value)
 */
	class Subject extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teacher
 *
 * @property int $id
 * @property string $full_name
 * @property int $station_id
 * @property string|null $email
 * @property string|null $phone
 * @property \App\Enums\TeachingType $teaching_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Station $station
 * @method static \Database\Factories\TeacherFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereStationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereTeachingType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereUpdatedAt($value)
 */
	class Teacher extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin|null $admin
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

