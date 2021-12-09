<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;use Cviebrock\EloquentSluggable\Sluggable;

class Merchandise extends Model
{
    use HasFactory,Sluggable;
    protected $table = "merchandises";

    protected $fillable = [
        'website_link',
        'image',
        'name',
        'slug',
        'status',
    ];

    

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
            ];
    }
}
