<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'text', 'tags', 'file'
    ];

    protected $attributes = [
        'url_image' => 'http://placeimg.com/640/480/animals',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
