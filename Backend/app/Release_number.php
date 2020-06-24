<?php

namespace Backend;

use Illuminate\Database\Eloquent\Model;

class Release_number extends Model
{
    protected $fillable = [
        'release_number_name', 'release_number_description', 'image_id',
    ];

    public function image()
    {
        return $this->belongsTo('Backend\app\image');
    }
    public function posts()
    {
        return $this->hasMany('Backend\app\Post');
    }
}
