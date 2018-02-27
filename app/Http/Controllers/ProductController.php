<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Resources\Product as ProductResource;

class ProductController extends Controller
{
    public function show($productId)
    {
        return new ProductResource(Product::find($productId));
    }
}
