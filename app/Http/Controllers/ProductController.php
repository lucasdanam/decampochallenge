<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(Request $request) {
        Product::create( [
            'name' => $request->name,
            'price' => $request->price
        ] );

        return json_encode("The product ". $request->name ." was saved");
    }

    public function index(Request $request) {
        $products = Product::paginate($request->perpage, ['*'], 'page', $request->page);
        return $products;
    }
}