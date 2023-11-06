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
 * App\Models\Category
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $slug
 * @property int $status
 * @property int $position
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Movie> $movies
 * @property-read int|null $movies_count
 * @method static \Database\Factories\CategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Country
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $slug
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CountryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Episode
 *
 * @property int $id
 * @property int $movie_id
 * @property string $link
 * @property int $episode
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\EpisodeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Episode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Episode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Episode query()
 * @method static \Illuminate\Database\Eloquent\Builder|Episode whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Episode whereEpisode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Episode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Episode whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Episode whereMovieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Episode whereUpdatedAt($value)
 */
	class Episode extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Genre
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $slug
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\GenreFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Genre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre query()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereUpdatedAt($value)
 */
	class Genre extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Movie
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $status
 * @property string $slug
 * @property string|null $avatar
 * @property int $category_id
 * @property int $genre_id
 * @property int $country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $is_hot
 * @property string $english_title
 * @property string $director
 * @property int $publish_year
 * @property int $resolution
 * @property int $subtitle
 * @property string|null $duration
 * @property string $hashtags
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Country|null $country
 * @property-read \App\Models\Genre|null $genre
 * @method static \Database\Factories\MovieFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Movie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Movie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Movie query()
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereDirector($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereEnglishTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereGenreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereHashtags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereIsHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie wherePublishYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereResolution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereUpdatedAt($value)
 */
	class Movie extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
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

