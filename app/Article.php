<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'title',
        'body',
        'published_at',
        'user_id',
        'tag_list'
    ];

    // Treats 'published_at' as a Carbon instance
    protected $dates  = ['published_at'];

    /**
     * Query scopes for finding published and unpublished articles. setPublishedAtAttribute
     * is used for parsing the date and setting the time to 00:00:00 if published in future.
     *
     * @param $query
     */
    public function scopePublished($query) {

        $query->where('published)at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query) {

        $query->where('published)at', '>=', Carbon::now());
    }

    public function setPublishedAtAttribute($date) {

        $this -> attributes['published_at'] = Carbon::parse($date);
    }

    /**
     * An article is owned by a user.
     *
     */
    public function user() {

        $this->belongsTo('App\User');
    }

    /**
     * An article has many likes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes() {
        return $this->hasMany('App\Likes');
    }
}