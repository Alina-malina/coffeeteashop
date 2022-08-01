<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $products = Product::get();

        return view('index', compact('products'));
    }

    public function categories()
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        $products = Product::where('category_id', $category->id)->get();
        return view('category', compact('category'));
    }



    public function product($category, $product = null)
    {
        return view('product', ['product' => $product]);
    }

    public function top3()
    {
        $products = Product::orderBy('id', 'desc')->take(3)->get();

        return view('index', compact('products'));
    }

    public function thanks()
    {
        return view('thanks');
    }
    public function order()
    {
        return view('order');
    }

    public function delivery()
    {
        return view('delivery');
    }
}
