<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Support\Str;

class Product extends Model
{
    public $guarded = [];

    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'code' => 9,
            'name' => 10,
            'brand' => 9,
            'details' => 8,
        ],
    ];





    public function productCategory()
    {
      return $this->belongsTo(ProductCategory::class);
    }

    public function productApplicationCategory()
    {
      return $this->belongsTo(Product_application_category::class);
    }
    public function containmentControl()
    {
      return $this->belongsToMany(ContainmentControl::class, 'products_containment_controls', 'product_id', 'containment_control_id')->withPivot('is_activated');
    }

    public function productSpecification()
    {
      return $this->belongsToMany(ProductSpecification::class, 'product_specification_pivot', 'product_id', 'product_specification_id')->withPivot('content');
    }

    public function productBrochure()
    {
      return $this->belongsToMany(ProductBrochure::class, 'product_brochure_pivot', 'product_id', 'product_brochure_id');
    }

    public function solutions()
    {
      return $this->belongsToMany(Solution::class, 'solutions_products_pivot', 'solution_id', 'product_id');
    }

    public function relProd()
    {
      return $this->belongsToMany(Product::class, 'related_prod_pivot', 'product_id', 'product_id2');
    }


    public function path()
    {
        if($this->ext_link){
            return url("{$this->ext_link}");

        }else{
            return url("/products/{$this->slug}/{$this->id}");

        }
    }

    public function scopeActive($query, $slug, $product_id)
    {
      return $query->where([['slug',$slug] , ['id',$product_id]])->where('is_activated', '=', 1);
    }

    public function scopeOld($query, $old)
    {
      return $query->where([['old_id',$old] ]);
    }

    public function scopeRelated($query, $prodAppId, $prodId)
    {
        return $query->where([['product_application_category_id',$prodAppId], ['id','!=',$prodId], ['product_application_category_id','!=',0]])->where('is_activated', '=', 1)->get();

    }

    public function relNews()
    {
      return $this->belongsToMany(News::class, 'products_news_pivot', 'product_id', 'news_id')->where('is_activated', '=', 1);
    }

}
