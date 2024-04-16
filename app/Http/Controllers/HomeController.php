<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::with('shop.owner')->get()->map(function ($product) {
            $nameWords = explode(' ', $product->name);
            $trimmedName = implode(' ', array_slice($nameWords, 0, 2));
            $product->name = $trimmedName;
            return $product;
        })->take(30);


        $categories = Category::with('children.children')->whereNull('parent_id')->get();

        return view('home', ['allProducts' => $products,'categories'=>$categories]);
    }

    public function contact()
    {
        return view('contact');
    }
}
