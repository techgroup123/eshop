<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Brand;

class Subcategory extends Model
{
    protected $fillable=['subcat_name','cat_id'];
    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }

    public function mybrand()
    {
        return $this->hasMany(Brand::class,'subcat_id');
    }
}
