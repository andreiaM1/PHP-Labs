<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;

class Product extends Model
{
    public $fillable = ['id', 'product_category_id', 'name', 'description', 'photo', 'price'];

    public function categories(){
        return $this->belongsTo(ProductCategory::class);
    }

}
