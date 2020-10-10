<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];
    /**
     * The recipes that belong to the tag.
     */
    public function recipes()
    {
        return $this->belongsToMany('App\Models\Recipe');
    }
}
