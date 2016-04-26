<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'article_id', 'comment'];

    /**
     * Each comment is owned by many users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users() {
        return $this->belongsTo('App\User');
    }

    /**
     * Each comment is associated with one article.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function articles() {
        return $this->hasOne('App\Article');
    }

    /**
     * Each comment may have many replies.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replies() {
        return $this->hasMany('App\Reply');
    }
}
