<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subcategory;

class Brand extends Model
{
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class,'subcat_id');
    }
}
