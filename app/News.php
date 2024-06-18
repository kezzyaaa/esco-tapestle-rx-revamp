<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class News extends Model
{
    public $guarded = [];
    //fillables
    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'title' => 10,
            'description' => 5,
            'content' => 3,
        ],
    ];



    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function scopeCurrent($query, $slug)
    {
      return $query->where('slug',$slug)->where('is_activated', '=', 1);
    }

    public function scopeOld($query, $old)
    {
      return $query->where('old_id',$old);
    }

    public function path()
    {
      return url("/news/{$this->slug}");
    }
}
