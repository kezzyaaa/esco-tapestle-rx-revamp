<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_application_category extends Model
{

	protected $fillable = ['code', 'product_category_id', 'slug', 'name', 'details', 'image', 'img_small', 'banner_img', 'is_activated', 'meta_keywords','meta_description'];
    public function productCategory()
    {
      return $this->belongsTo(ProductCategory::class);
    }

    public function products()
    {
      return $this->hasMany('App\Product')->where('is_activated', '1');
    }
    public function path()
    {
      return url("/products/{$this->products[0]->slug}/{$this->products[0]->id}");
    }

    public function scopeActive($query, $slug, $productCatId)
    {
      return $query->where([['slug',$slug] , ['id',$productCatId]]);
    }


}
