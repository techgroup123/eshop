<?php

namespace App;
use App\Subcategory;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function mysubcat()
    {
        return $this->hasMany(Subcategory::class,'cat_id');
    }
}
