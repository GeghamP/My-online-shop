<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $request){
		$products = Product::all();
		return view('shop.index',['products' => $products]);
	}
}
