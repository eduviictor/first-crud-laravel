<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiError;
use App\Http\Controllers\Controller;
use App\Http\Requests\Purchase\StorePurchase;
use App\Product;
use Exception;
use Illuminate\Support\Facades\Http;

/**
 * @group  Purchase
 *
 * APIs for managing products
 */

class PurchaseController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @response {
     *      "data": {
     *          "msg": "Sucesso!",
     *          "code": 200
     *      }
     * }
     * @response 400 {
     *      "data": {
     *          "msg": "Erro nos dados enviados!",
     *          "code": 400
     *      }
     * }
     * @response 404 {
     *      "data": {
     *          "msg": "Não encontrado!",
     *          "code": 404
     *      }
     * }
     * @response 402 {
     *      "data": {
     *          "msg": "Compra não aprovada!",
     *          "code": 402
     *      }
     * }
     * @response 500 {
     *      "data": {
     *          "msg": "Erro interno no servidor!",
     *          "code": 500
     *      }
     * }
     * @bodyParam  product_id integer required Id of product.
     * @bodyParam  quantity_purchased integer integer Quantity of products you want to buy.
     * @bodyParam  card[owner] string required Credit card holder name.
     * @bodyParam  card[card_number] string required Number of credit card.
     * @bodyParam  card[date_expiration] string required Credit card expiration date.
     * @bodyParam  card[flag] string required Flag of credit card.
     * @bodyParam  card[cvv] string required Cvv of credit card.
     */
    public function store(StorePurchase $request)
    {
        // Validate data
        $request->validated();
        $request->validateLogic();

        try {
            $productData = $this->product->find($request->product_id);

            $amount = $productData['amount'] * $request['quantity_purchased'];

            $response = Http::post('https://run.mocky.io/v3/ca2322c5-8dff-449c-8690-924628e7bc92', [
                'amount' => $amount,
                'card' => $request['card']
            ]);

            $responseData = $response->json();

            switch ($responseData['status']) {
                case 200:
                    if (strcmp($responseData['message']['status'], 'Aprovado') == 0) {
                        return response()->json(ApiError::success());
                    }
                    return response()->json(ApiError::customizeError('Compra não aprovada!', 402), 402);
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
