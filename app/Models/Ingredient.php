<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{

    protected $guarded = [];

    /**
     * Get the recipe that owns the comment.
     */
    public function recipe()
    {
        return $this->belongsTo('App\Models\Recipe');
    }
}
