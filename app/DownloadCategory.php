<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownloadCategory extends Model
{
    public function productBrochure()
    {
      return $this->belongsToMany(ProductBrochure::class, 'download_brochure_pivot', 'download_categories_id', 'product_brochure_id');
    }

}
