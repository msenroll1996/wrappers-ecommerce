<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";

    protected $fillable = [
        'name',
        'slug',
        'code',
        'selling_price',
        'quantity',
        'color',
        'image_first',
        'image_second',
        'image_third',
        'category_id',
        'sub_category_id',
        'description',
        'key_points',
        'status',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function sub_category(){
        return $this->belongsTo(SubCategory::class);
    }
}
