<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seasons extends Model
{
    protected $table = 'seasons';
    protected $fillable = [
        'series_id',
        'season_number'
    ];

    public function series()
    {
        return $this->hasOne('App\Series','id','series_id');
    }


}
