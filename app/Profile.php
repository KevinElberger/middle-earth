<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable= [
        'profile',
        'location'
    ];
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    /**
     * A profile belongs to one user.
     *
     * @return mixed
     */
    public function user() {
        return $this->belongsTo('App\User');
    }
}
