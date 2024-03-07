<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product_item";
    public $timestamps = true;
    protected $fillable = ['product_title', 'price', 'product_type'];
    protected $visible = ['product_title', 'price', 'product_type'];
}
