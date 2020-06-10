<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiError;
use App\Http\Controllers\Controller;
use App\Http\Requests\Purchase\StorePurchase;
use App\Product;
use Exception;
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
        // Validate data
        $request->validated();
        $request->validateLogic();

        try {
            $productData = $this->product->find($request->product_id);

            $amount = $productData['amount'] * $request['quantity_purchased'];

            $response = Http::post('https://run.mocky.io/v3/e8296024-6e01-4a56-9fb9-5d7a2443fe1c', [
                'amount' => $amount,
                'card' => $request['card']
            ]);

            $responseData = $response->json();

            switch ($responseData['status']) {
                case 200:
                    if (strcmp($responseData['message']['status'], 'Aprovado') == 0) {
                        return response()->json(ApiError::success());
                    }
                    return response()->json(ApiError::customizeError('Compra não aprovada!', 402));
                case 400:
                    return response()->json(ApiError::dataError());
            }
        } catch (Exception $e) {
            if (config('app.debug')) {
                return response()->json(ApiError::customizeError($e->getMessage(), 500));
            }
            return response()->json(ApiError::serverError());
        }
    }
}
