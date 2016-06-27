<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    protected $table = 'parts';
    protected $fillable = [
        'series_id',
        'seasons_id',
        'episode',
        'date',
        'links'
    ];

    public function series()
    {
        return $this->hasOne('App\Series','id','series_id');
    }

    public function seasons()
    {
        return $this->hasOne('App\Seasons','id','seasons_id');
    }
}
