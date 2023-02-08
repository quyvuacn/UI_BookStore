<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\Cart;
use App\Models\Author;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
//use App\Services\Product\ProductServiceInterface;
//use App\Services\ProductComment\ProductCommentRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ShopController extends Controller
{

    //
    public function showDetail($id){
        $authors = Author::all();
        $categories = ProductCategory::all();
        $products = Product::findOrFail($id);

        return view('front.shop.show', compact('products', 'authors', 'categories', ));
    }

    public function index(Request $request){
        $authors = Author::all();
        $categories = ProductCategory::all();
        //search
        $search = $request->search ?? '';
        $products = Product::where('name', 'like', '%'. $search . '%')->get();
        //phan trang
        $perPage = $request->show ?? 9;
        $sortBy = $request->sort_by ?? 'name-ascending';
        switch ($sortBy) {
            case 'name-ascending':
                $products = Product::orderBy('name');
                break;
            case 'name-descending':
                $products = Product::orderByDesc('name');
                break;
            case 'oldest':
                $products = Product::orderByDesc('id');
                break;
            case 'price-ascending':
                $products = Product::orderBy('price');
                break;
            case 'price-descending':
                $products = Product::orderByDesc('price');
                break;
            default :
                $products = Product::orderByDesc('id');
        }

        $products = $products->paginate($perPage);
        $products->appends(['sort_by' => $sortBy, 'show' => $perPage]);

        //category
        $category = $request->cate ?? [];
        $category_ids = array_keys($category);
        $products = $category_ids != null ? $products->whereIn('product_category_id', $category_ids) : $products;
        //price

        return view('front.shop.index', compact('products', 'authors', 'categories'));
    }

    public function category($categoryName, Request $request) {
        $categories = ProductCategory::all();

        $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery()->paginate();

        return view('front.shop.index', compact('categories', 'products'));
    }

    //ham xu ly sap xep sp
//    public function sortPagination($products, $perPage){
//
//        $products = $products->paginate($perPage);
//
//        $products->appends(['show' => $perPage]);
//
//        return $products;
//
//    }

}
