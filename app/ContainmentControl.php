<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContainmentControl extends Model
{
	protected $fillable = ['name', 'description', 'content', 'content', 'img_large', 'img_small', 'lottie_file_large', 'meta_keywords', 'meta_description', 'is_activated'];

    public function products()
    {
      return $this->belongsToMany(Product::class, 'products_containment_controls', 'product_id', 'containment_control_id');
    }

}
