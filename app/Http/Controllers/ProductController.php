<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(ProductRequest $request) {

        Product::create( [
            'name' => $request->name,
            'price' => $request->price
        ] );

        return json_encode("The product ". $request->name ." was saved");
    }

    public function index(Request $request) {
        $products = Product::orderBy('id', 'DESC')->paginate($request->perpage, ['*'], 'page', $request->page);
        return $products;
    }
}