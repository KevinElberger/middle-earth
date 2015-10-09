<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{


    /**
     * Fillable fields for tags.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get the article with the associated tag.
     *
     */
    public function articles() {

        return $this->belongsToMany('App\Article');
    }
}