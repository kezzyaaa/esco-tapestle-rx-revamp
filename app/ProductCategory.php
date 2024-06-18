<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
	protected $fillable = ['slug', 'name', 'banner_img', 'content', 'is_activated', 'meta_keywords', 'meta_description'];

    public function products()
    {
      return $this->hasMany(Product::class);
    }

    public function productApplicationCategories()
    {
      return $this->hasMany(Product_application_category::class);
    }

}
