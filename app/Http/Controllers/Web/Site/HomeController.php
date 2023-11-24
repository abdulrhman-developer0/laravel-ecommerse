<?php

namespace App\Http\Controllers\Web\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestProducts = \App\Models\Product::latest()->take(3)->get();

        $latestCategories = \App\Models\Product::latest()->take(3)->get();

        return view('site.home')
            ->with('products', $latestProducts)
            ->with('categories', $latestCategories);
    }
}
