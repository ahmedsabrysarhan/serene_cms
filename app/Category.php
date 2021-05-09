<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Product;

class Category extends Model
{
    protected $fillable = ['name'];

    use SoftDeletes;

    public function products(){
        return $this->hasMany(Product::class);
    }
}
