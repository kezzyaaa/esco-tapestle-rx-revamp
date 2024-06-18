<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $guarded = [];
    protected $dates = ['event_start','event_end'];

    public function scopeUpcomming($query, $today)
    {
      return $query->whereDate('event_end','>=' , $today)
      ->get();
    }

    public function scopePrevious($query, $today)
    {
      return $query->whereDate('event_end','<' , $today)
      ->get();
    }
}
