<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Blog;
use App\Models\Product;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){

        $commicProducts = Product::where('feature', true)->where('product_category_id', 1)->get();
        $economyProducts = Product::where('feature', true)->where('product_category_id', 2)->get();
        $textbookProducts = Product::where('feature', true)->where('product_category_id', 3)->get();

        $products = Product::all();

        return view('front.index', compact('commicProducts', 'economyProducts', 'textbookProducts', 'products', ));
//        return view('front.index', compact('featureProducts', ));
    }
}
