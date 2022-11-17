<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $products = Product::with('category')->get();
        return view('pages.frontend.index', compact('products'));
    }

    public function blog(){
        return view('pages.frontend.blog');
    }
}
