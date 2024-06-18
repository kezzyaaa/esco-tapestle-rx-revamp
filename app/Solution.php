<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Solution extends Model
{
    protected $fillable = ['parent_id', 'slug', 'title', 'icon', 'image', 'banner_img', 'details', 'content', 'layout', 'is_activated', 'meta_keywords', 'meta_description'];


    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'title' => 10,
            'details' => 5,
        ],
    ];


    public function scopeCurrent($query, $slug)
    {
      return $query->where('slug',$slug)->where('is_activated', '=', 1);
    }

    public function parent() {
        return $this->hasOne('App\Solution', 'id', 'parent_id');
    }

    public function children() {
        return $this->hasMany('App\Solution', 'parent_id', 'id')->where('is_activated', '=', 1);
    }
    public function childrenFirstHalf() {
        return $this->hasMany('App\Solution', 'parent_id', 'id')->take(10);
    }
    public function childrenSecondHalf() {
        return $this->hasMany('App\Solution', 'parent_id', 'id')->skip(10)->take(11);
    }
    public function scopeGetparents()
    {
      return $this->where('parent_id',null)->where('is_activated', '=', 1);
    }

    public function product()
    {
      return $this->belongsToMany(Product::class, 'solutions_products_pivot', 'solution_id', 'product_id')->where('is_activated', '=', 1);
    }

    public function childSolutions()
    {
      return $this->belongsToMany(Solution::class, 'child_solutions_pivot', 'solution_id', 'child_solution_id');
    }

    public function scopeOld($query, $old)
    {
      return $query->where([['old_id',$old] ]);
    }

    public function path()
    {
      return url("/solutions/{$this->slug}");
    }
}
