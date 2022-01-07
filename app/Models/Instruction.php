<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Instruction extends Model
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
