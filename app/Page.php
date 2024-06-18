<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public $guarded = [];

    public function pageCategory()
    {
      return $this->belongsTo(PageCategory::class);
    }

    public function scopeCurrent($query, $slug)
    {
      return $query->where('slug',$slug);
    }

    public function scopeSidemenu($query, $activePageSection)
    {
      return $query->where('page_category_id',$activePageSection);
    }

    public function scopeSubmenu($query, $activePageSection)
    {
      return $query->where('section',$activePageSection);
    }

    public function product()
    {
      return $this->belongsToMany(Product::class, 'pages_products_pivot', 'page_id', 'product_id')->where('is_activated', '=', 1);
    }

}
