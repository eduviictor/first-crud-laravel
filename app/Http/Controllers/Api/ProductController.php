<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiError;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProduct;
use App\Product;
use Exception;

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

    public function store(StoreProduct $request)
    {
        $request->validated();

        try {
            $data = $request->all();
            $this->product->create($data);
            return response()->json(ApiError::success());
        } catch (Exception $e) {
            if (config('app.debug')) {
                return response()->json(ApiError::customizeError($e->getMessage(), 500));
            }
            return response()->json(ApiError::serverError());
        }
    }
}
