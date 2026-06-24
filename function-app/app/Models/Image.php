<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'img_name',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function saveImg($img, $product_id)
    {
        $file = $_FILES['img']['name'];

        foreach ($file as $key => $value) {

            $img_name = $value;

            $tmp = $_FILES['img']['tmp_name'][$key];

            $extension = pathinfo($img_name, PATHINFO_EXTENSION);

            $img_name = uniqid() . "." . $extension;

            Image::create([
                "img_name" => $img_name,
                "product_id" => $product_id
            ]);

            move_uploaded_file($tmp, storage_path("app/public/images/products/$img_name"));
        }
    }
}
