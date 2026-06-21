<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'sale',
        'count',
        'cat_id'
    ];

    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }
}
