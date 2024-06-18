<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSpecification extends Model
{
    public function products()
    {
      return $this->belongsToMany(Product::class, 'product_specification_pivot', 'product_id', 'product_specification_id')->withPivot('content');
    }

}
