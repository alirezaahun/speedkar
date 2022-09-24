<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getIsActiveAttribute($is_active){
        return $is_active ? 'فعال' : 'غیرفعال';
    }

    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function images(){
        return $this->hasMany(ProductImage::class);
    }
}
