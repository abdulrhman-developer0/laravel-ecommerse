<?php

namespace App\Http\Controllers\Web\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(string $slug = null)
    {
        $categories = \App\Models\Category::all();

        if ($slug === null) {
            $products = \App\Models\Product::all();
        }
        else {
            $products = $categories->where('slug', $slug)->firstOrFail()->products;
        }

        return view('site.shop.index')
            ->with('products', $products)
            ->with('categories', $categories);
    }

    public function showSingleProduct()
    {
        return view('site.shop.single-product');
    }
}
