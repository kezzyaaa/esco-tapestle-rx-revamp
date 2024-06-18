<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageCategory extends Model
{
    public $guarded = [];

    public function page()
    {
      return $this->hasMany(Page::class);
    }

}
