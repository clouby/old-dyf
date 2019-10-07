<?php

namespace App\Models;

use Spatie\Searchable\{Search, Searchable, SearchResult};
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\{HasSlug, SlugOptions};

class Service extends Model implements Searchable
{
    use HasSlug;

    protected $fillable = [
        'service_name',
        'description',
        'what_to_expect',
        'important_inf',
        'additional_inf',
        'principal',
        'image',
        'price_adult',
        'price_kids',
        'kids_active',
        'kids_message',
        'price_infants',
        'infants_active',
        'infants_message',
        'active',
        'combo',
        'category_id',
        'operator_id',
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('service.query', $this->slug);

         return new \Spatie\Searchable\SearchResult(
            $this,
            $this->service_name,
            $url
        );
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('service_name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo( Category::class );
    }

    public function images()
    {
        return $this->morphMany( Image::class, 'imageable');
    }

    public function operator()
    {
        return $this->belongsTo( Operator::class );
    }

    public function reservation()
    {
        return $this->belongsTo( Reservation::class );
    }

    public function combos()
    {
        return $this->hasMany( Combo::class );
    }

    public function shopping()
    {
        return $this->belongsTo(Shopping::class);
    }

    public function transfers()
    {
        return $this->hasMany( Transfer::class );
    }

    public function dispotitions()
    {
        return $this->hasMany( Dispotition::class );
    }

    public function availabilities()
    {
        return $this->hasMany( Availability::class );
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeRelaModel($query, $type)
    {
        return $query->where('category_id', $type);
    }
}
