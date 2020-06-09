<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiError;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        return $this->product->paginate(10);
    }

    public function show($id)
    {
        $product = $this->product->find($id);
        if (!$product) return response()->json(ApiError::notFound());
        $data = ['data' => $product];
        return response()->json($data);
    }
}
