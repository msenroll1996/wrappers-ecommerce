<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory,Sluggable;
    protected $table = "categories";

    protected $fillable = [
        'parent_id',
        'sort_order',
        'cover_image',
        'name',
        'slug',
        'status',
        'description',
    ];

    public function child_categories(){
        return $this->hasMany(Category::class,'parent_id');
    }
    public function parent_categories(){
        return $this->belongsTo(Category::class,'parent_id');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
            ];
    }

    
}
