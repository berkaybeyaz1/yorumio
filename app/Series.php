<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = 'series';
    protected $fillable = [
        'title',
        'about',
        'location',
        'image',
        'avarage_minute'
    ];

    public function seasons()
    {
        return $this->hasMany('App\Seasons');
    }
    public function parts()
    {
        return $this->hasMany('App\Parts','series_id','id');
    }
}
