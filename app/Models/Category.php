<?php

namespace App\Models;

use Spatie\Searchable\{Search, Searchable, SearchResult};
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\{HasSlug, SlugOptions};

class Category extends Model implements Searchable
{
    use HasSlug;

    protected $fillable = [
        'category',
        'slug',
        'image',
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('category.query', $this->slug);
     
         return new \Spatie\Searchable\SearchResult(
            $this,
            $this->category,
            $url
        );
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('category')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function services()
    {
        return $this->hasMany( Service::class );
    }
}
