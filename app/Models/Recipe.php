<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasSlug;

    protected $guarded = [];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
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

    /**
     * Get the ingredients for the blog post.
     */
    public function ingredients()
    {
        return $this->hasMany('App\Models\Ingredient');
    }

    /**
     * Get the instructions for the blog post.
     */
    public function instructions()
    {
        return $this->hasMany('App\Models\Instruction');
    }
}
