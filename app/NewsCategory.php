<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    public $guarded = [];

    public function news()
    {
      return $this->hasMany(News::class)->where('is_activated', '=', 1);
    }
    public function scopeCurrent($query, $slug)
    {
      return $query->where('slug',$slug);
    }

    public function path()
    {
      return url("/news-category/{$this->slug}");
    }
}
