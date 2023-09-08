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
 * App\Models\ActionItem
 *
 * @property int $id
 * @property string $description
 * @property int $is_completed
 * @property int $wont_do
 * @property \Illuminate\Support\Carbon|null $due_date
 * @property string|null $completed_at
 * @property int|null $created_by
 * @property int|null $responsable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Meeting> $meetings
 * @property-read int|null $meetings_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Meeting> $originalMeetings
 * @property-read int|null $original_meetings_count
 * @property-read \App\Models\User|null $responsable
 * @method static \Database\Factories\ActionItemFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ActionItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActionItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActionItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|ActionItem whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionItem whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionItem whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionItem whereIsCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionItem whereResponsableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActionItem whereWontDo($value)
 * @mixin \Eloquent
 */
	class IdeHelperActionItem {}
}

namespace App\Models{
/**
 * App\Models\Candidate
 *
 * @property int $id
 * @property int|null $job_listing_id
 * @property string $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $location
 * @property string|null $description
 * @property string|null $linkedin
 * @property string|null $github
 * @property string|null $twitter
 * @property string|null $website
 * @property string|null $portfolio
 * @property string|null $origin
 * @property string|null $resume
 * @property int $rating
 * @property int $order_column
 * @property int|null $candidate_status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\JobListing|null $jobListing
 * @property-read \App\Models\CandidateStatus|null $status
 * @method static \Database\Factories\CandidateFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereCandidateStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereGithub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereJobListingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate wherePortfolio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereResume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereWebsite($value)
 * @mixin \Eloquent
 */
	class IdeHelperCandidate {}
}

namespace App\Models{
/**
 * App\Models\CandidateStatus
 *
 * @property int $id
 * @property string $name
 * @property string $color
 * @property int $order_column
 * @property int $is_default
 * @property int $job_listing_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Candidate> $candidates
 * @property-read int|null $candidates_count
 * @property-read \App\Models\JobListing $jobListing
 * @method static \Database\Factories\CandidateStatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateStatus whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateStatus whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateStatus whereJobListingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateStatus whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperCandidateStatus {}
}

namespace App\Models{
/**
 * App\Models\JobListing
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string|null $internal_id
 * @property int|null $team_id
 * @property \App\Enums\JobListingStatus $status
 * @property int $is_private
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CandidateStatus> $candidateStatuses
 * @property-read int|null $candidate_statuses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Candidate> $candidates
 * @property-read int|null $candidates_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $recruiters
 * @property-read int|null $recruiters_count
 * @property-read \App\Models\Team|null $team
 * @method static \Database\Factories\JobListingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|JobListing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobListing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobListing query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobListing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobListing whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobListing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobListing whereInternalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobListing whereIsPrivate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobListing whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobListing whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobListing whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobListing whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperJobListing {}
}

namespace App\Models{
/**
 * App\Models\Meeting
 *
 * @property int $id
 * @property string $meeting_type
 * @property string|null $title
 * @property string|null $description
 * @property string|null $start_at
 * @property string|null $end_at
 * @property \Illuminate\Support\Carbon|null $completed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ActionItem> $actionItems
 * @property-read int|null $action_items_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Note> $notes
 * @property-read int|null $notes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $participants
 * @property-read int|null $participants_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TalkingPoint> $talkingPoints
 * @property-read int|null $talking_points_count
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting completed()
 * @method static \Database\Factories\MeetingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting oneOnOne()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting pending()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereMeetingType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Meeting whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperMeeting {}
}

namespace App\Models{
/**
 * App\Models\MeetingTemplate
 *
 * @property int $id
 * @property int $user_id
 * @property string $scope
 * @property int $is_default
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MeetingTemplateItem> $items
 * @property-read int|null $items_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\MeetingTemplateFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplate whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplate whereScope($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplate whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplate whereUserId($value)
 * @mixin \Eloquent
 */
	class IdeHelperMeetingTemplate {}
}

namespace App\Models{
/**
 * App\Models\MeetingTemplateItem
 *
 * @property int $id
 * @property int $meeting_template_id
 * @property string|null $description
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\MeetingTemplate|null $template
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplateItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplateItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplateItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplateItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplateItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplateItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplateItem whereMeetingTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplateItem whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingTemplateItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperMeetingTemplateItem {}
}

namespace App\Models{
/**
 * App\Models\Note
 *
 * @property int $id
 * @property string $content
 * @property int|null $user_id
 * @property string $user_name
 * @property int $noteable_id
 * @property string $noteable_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $noteable
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\NoteFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Note newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Note newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Note query()
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereNoteableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereNoteableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereUserName($value)
 * @mixin \Eloquent
 */
	class IdeHelperNote {}
}

namespace App\Models{
/**
 * App\Models\OneOnOneSuggestion
 *
 * @property int $id
 * @property string $description
 * @property int $uses
 * @property string $locale
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OneOnOneSuggestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OneOnOneSuggestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OneOnOneSuggestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|OneOnOneSuggestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneOnOneSuggestion whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneOnOneSuggestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneOnOneSuggestion whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneOnOneSuggestion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneOnOneSuggestion whereUses($value)
 * @mixin \Eloquent
 */
	class IdeHelperOneOnOneSuggestion {}
}

namespace App\Models{
/**
 * App\Models\Organization
 *
 * @method static \Database\Factories\OrganizationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Organization newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organization query()
 * @mixin \Eloquent
 */
	class IdeHelperOrganization {}
}

namespace App\Models{
/**
 * App\Models\Pipeline
 *
 * @property int $id
 * @property string $name
 * @property int $is_default
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PipelineStatus> $statuses
 * @property-read int|null $statuses_count
 * @method static \Database\Factories\PipelineFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Pipeline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pipeline newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pipeline query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pipeline whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pipeline whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pipeline whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pipeline whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pipeline whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperPipeline {}
}

namespace App\Models{
/**
 * App\Models\PipelineStatus
 *
 * @property int $id
 * @property int $pipeline_id
 * @property string $name
 * @property int $order_column
 * @property string|null $color
 * @property int $is_default
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Pipeline $pipeline
 * @method static \Database\Factories\PipelineStatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PipelineStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PipelineStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PipelineStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|PipelineStatus whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PipelineStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PipelineStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PipelineStatus whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PipelineStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PipelineStatus whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PipelineStatus wherePipelineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PipelineStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperPipelineStatus {}
}

namespace App\Models{
/**
 * App\Models\Position
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\PositionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Position newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Position newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Position query()
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperPosition {}
}

namespace App\Models{
/**
 * App\Models\TalkingPoint
 *
 * @property int $id
 * @property int $meeting_id
 * @property string $description
 * @property bool $is_checked
 * @property int $order_column
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Meeting $meeting
 * @method static \Database\Factories\TalkingPointFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TalkingPoint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TalkingPoint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TalkingPoint query()
 * @method static \Illuminate\Database\Eloquent\Builder|TalkingPoint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TalkingPoint whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TalkingPoint whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TalkingPoint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TalkingPoint whereIsChecked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TalkingPoint whereMeetingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TalkingPoint whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TalkingPoint whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperTalkingPoint {}
}

namespace App\Models{
/**
 * App\Models\Team
 *
 * @property int $id
 * @property int|null $leader_id
 * @property string|null $description
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $leader
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\TeamFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereLeaderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperTeam {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property int|null $position_id
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $trigram
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $city
 * @property string|null $state
 * @property string|null $country
 * @property string|null $emergency_contact_name
 * @property string|null $emergency_contact_phone
 * @property string|null $birthdate
 * @property string|null $joined_at
 * @property string|null $exited_at
 * @property string|null $contract_renewal_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobListing> $JobListings
 * @property-read int|null $job_listings_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ActionItem> $actionItems
 * @property-read int|null $action_items_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, User> $directReports
 * @property-read int|null $direct_reports_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, User> $managers
 * @property-read int|null $managers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MeetingTemplate> $meetingTemplates
 * @property-read int|null $meeting_templates_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Position|null $position
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Team> $teams
 * @property-read int|null $teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereContractRenewalAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmergencyContactName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmergencyContactPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereExitedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereJoinedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTrigram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutTrashed()
 * @mixin \Eloquent
 */
	class IdeHelperUser {}
}

