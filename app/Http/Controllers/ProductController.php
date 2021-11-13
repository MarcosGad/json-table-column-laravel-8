<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_product_form()
    {
    	return view('create');
    }

    public function store(Request $request)
    {
    	$product = Product::create($request->all());
        return redirect()->back();
    }

    public function index()
    {   
    	$post = Product::all();
    	return view('index',['products' => $post]);
    }
}