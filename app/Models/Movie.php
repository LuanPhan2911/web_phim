<?php

namespace App\Models;

use App\Enums\MovieResolution;
use App\Enums\MovieSubtitle;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Movie extends Model
{
    use HasFactory;
    use HasSlug;
    public $guarded = [];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    protected function resolution(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => MovieResolution::getKey($value)
        );
    }
    protected function subtitle(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => MovieSubtitle::getKey($value)
        );
    }

    protected function hashtags(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Str::of($value)->split('/\s*,\s*(?![^(]*\))/')
        );
    }
}
