<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBrochure extends Model
{

	protected $fillable = ['title', 'file', 'type', 'img_thumb', 'is_activated'];

    public function product()
    {
      return $this->belongsToMany(Product::class, 'product_brochure_pivot', 'product_id', 'product_brochure_id');
    }

    public function downloadCategory()
    {
      return $this->belongsToMany(DownloadCategory::class, 'download_brochure_pivot', 'download_categories_id', 'product_brochure_id');
    }
}
