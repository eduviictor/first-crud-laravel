<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiError;
use App\Http\Controllers\Controller;
use App\Http\Requests\Purchase\StorePurchase;
use App\Product;
use Illuminate\Support\Facades\Http;

class PurchaseController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function store(StorePurchase $request)
    {
        // Get product to validate with required quantity
        $productData = $this->product->find($request->product_id);

        // Product not exists
        if (!$productData) {
            return response()->json(ApiError::notFound());
        }

        // Validate data
        $request->validated();
        $request->validateLogic();

        $amount = $productData['amount'] * $request['quantity_purchased'];
    }
}
