<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductControllerApi extends Controller
{
    public function index(){
        $products = Product::with('categories', 'user')->get();
        return $products;
    }

    public function find_id ($user_id) {
        return Product::where('user_id', $user_id)->get();
    }
}
