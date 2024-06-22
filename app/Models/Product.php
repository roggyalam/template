<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name_product','stock','price','description','id_brand'];
    protected $timestamp = true ;

    public function brand()
    {
        return $this->belongsto(Brand::class, 'id_brand');
    }
}
