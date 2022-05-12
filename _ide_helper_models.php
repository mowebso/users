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
 * App\Models\Project
 *
 * @method static \Database\Factories\ProjectFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 */
	class IdeHelperProject {}
}

namespace MoWebSo\ModalManager\Models{
/**
 * MoWebSo\ModalManager\Models\Project
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 */
	class IdeHelperProject {}
}

namespace MoWebSo\Tenants\Models{
/**
 * MoWebSo\Tenants\Models\Tenant
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\MoWebSo\Users\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereUpdatedAt($value)
 */
	class IdeHelperTenant {}
}

namespace MoWebSo\TubeManager\Channels\Models{
/**
 * MoWebSo\TubeManager\Channels\Models\Channel
 *
 * @property string $id
 * @property int $tenant_id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\MoWebSo\TubeManager\Videos\Models\Video[] $videos
 * @property-read int|null $videos_count
 * @method static \MoWebSo\TubeManager\Database\Factories\ChannelFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Channel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Channel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereTenantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereUpdatedAt($value)
 */
	class IdeHelperChannel {}
}

namespace MoWebSo\TubeManager\Descriptions\Embeddables\Models{
/**
 * MoWebSo\TubeManager\Descriptions\Embeddables\Models\EmbeddableLink
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\MoWebSo\TubeManager\Descriptions\Models\Description[] $descriptions
 * @property-read int|null $descriptions_count
 * @method static \Illuminate\Database\Eloquent\Builder|EmbeddableLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmbeddableLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmbeddableLink query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmbeddableLink whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmbeddableLink whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmbeddableLink whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmbeddableLink whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmbeddableLink whereUrl($value)
 */
	class IdeHelperEmbeddableLink {}
}

namespace MoWebSo\TubeManager\Descriptions\Models{
/**
 * MoWebSo\TubeManager\Descriptions\Models\Description
 *
 * @property int $id
 * @property string $video_id
 * @property int $embeddable_id
 * @property string $embeddable_type
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $embeddables
 * @property-read \MoWebSo\TubeManager\Videos\Models\Video $video
 * @method static \Illuminate\Database\Eloquent\Builder|Description newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Description newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Description query()
 * @method static \Illuminate\Database\Eloquent\Builder|Description whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Description whereEmbeddableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Description whereEmbeddableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Description whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Description whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Description whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Description whereVideoId($value)
 */
	class IdeHelperDescription {}
}

namespace MoWebSo\TubeManager\Links\Models{
/**
 * MoWebSo\TubeManager\Links\Models\Link
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \MoWebSo\TubeManager\Database\Factories\LinkFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Link newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Link newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Link query()
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereUrl($value)
 */
	class IdeHelperLink {}
}

namespace MoWebSo\TubeManager\Videos\Models{
/**
 * MoWebSo\TubeManager\Videos\Models\Video
 *
 * @property string $id
 * @property int $tenant_id
 * @property string $channel_id
 * @property string $title
 * @property \Illuminate\Support\Carbon $published_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \MoWebSo\TubeManager\Channels\Models\Channel $channel
 * @property-read \Illuminate\Database\Eloquent\Collection|\MoWebSo\TubeManager\Descriptions\Models\Description[] $description
 * @property-read int|null $description_count
 * @method static \MoWebSo\TubeManager\Database\Factories\VideoFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Video newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Video newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Video query()
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereChannelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereTenantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereUpdatedAt($value)
 */
	class IdeHelperVideo {}
}

namespace MoWebSo\Users\Models{
/**
 * MoWebSo\Users\Models\User
 *
 * @property int $id
 * @property int $current_tenant_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\MoWebSo\Tenants\Models\Tenant[] $tenants
 * @property-read int|null $tenants_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTenantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class IdeHelperUser {}
}

