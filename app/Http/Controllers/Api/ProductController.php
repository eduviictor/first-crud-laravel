<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiError;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProduct;
use App\Http\Requests\Product\UpdateProduct;
use App\Product;
use Exception;

/**
 * @group  Product
 *
 * APIs for managing products
 */

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @response {
     *      "current_page": 1,
     *      "data": [
     *      { 
     *          "id": 4,
     *          "name": "Example Response",
     *          "amount": 150,
     *          "qty_stock": 2,
     *          "last_sale": null
     *      }],
     *      "first_page_url": "first-page-url",
     *      "from": 1,
     *      "last_page": 2,
     *      "last_page_url": "last-page-url",
     *      "next_page_url": "next-page-url",
     *      "path": "path-url",
     *      "per_page": 10,
     *      "prev_page_url": null,
     *      "to": 10,
     *      "total": 15
     * }
     * @response 404 {
     *      "data": {
     *          "msg": "Não encontrado!",
     *          "code": 404
     *      }
     * }
     */
    public function index()
    {
        return $this->product->paginate(10);
    }

    /**
     * @response {
     *      "data": { 
     *          "id": 4,
     *          "name": "Example Response",
     *          "amount": 150,
     *          "qty_stock": 2,
     *          "last_sale": null
     *      }
     * }
     * @response 404 {
     *      "data": {
     *          "msg": "Não encontrado!",
     *          "code": 404
     *      }
     * }
     */
    public function show($id)
    {
        $product = $this->product->find($id);
        if (!$product) return response()->json(ApiError::notFound());
        $data = ['data' => $product];
        return response()->json($data);
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
     * @response 500 {
     *      "data": {
     *          "msg": "Erro interno no servidor!",
     *          "code": 500
     *      }
     * }
     * @bodyParam  name string required Name of product.
     * @bodyParam  amount float required Price of product.
     * @bodyParam  qty_stock integer required Quantity of products.
     * @bodyParam  last_sale date optional Date of last sale (default: null, format: dd-mm-yyyy)
     */
    public function store(StoreProduct $request)
    {
        $request->validated();
        $request->validateLogic();

        try {
            $data = $request->all();
            if ($data['last_sale']) $data['last_sale'] = date_create(str_replace('/', '-', $data['last_sale']));
            $this->product->create($data);
            return response()->json(ApiError::success());
        } catch (Exception $e) {
            if (config('app.debug')) {
                return response()->json(ApiError::customizeError($e->getMessage(), 500));
            }
            return response()->json(ApiError::serverError());
        }
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
     * @response 500 {
     *      "data": {
     *          "msg": "Erro interno no servidor!",
     *          "code": 500
     *      }
     * }
     * @bodyParam  name string optional Name of product.
     * @bodyParam  amount float optional Price of product.
     * @bodyParam  qty_stock integer optional Quantity of products.
     * @bodyParam  last_sale date optional Date of last sale (default: null, format: dd-mm-yyyy)
     */
    public function update(UpdateProduct $request, $id)
    {
        $request->validated();
        $request->validateLogic();

        try {
            $data = $request->all();
            if ($data['last_sale']) $data['last_sale'] = date_create(str_replace('/', '-', $data['last_sale']));
            $product = $this->product->find($id);
            if (!$product) return response()->json(ApiError::notFound());
            $product->update($data);
            return response()->json(ApiError::success());
        } catch (Exception $e) {
            if (config('app.debug')) {
                return response()->json(ApiError::serverError($e->getMessage(), 500));
            }
            return response()->json(ApiError::serverError());
        }
    }

    /**
     * @response {
     *      "data": {
     *          "msg": "Sucesso!",
     *          "code": 200
     *      }
     * }
     * @response 404 {
     *      "data": {
     *          "msg": "Não encontrado!",
     *          "code": 404
     *      }
     * }
     * @response 500 {
     *      "data": {
     *          "msg": "Erro interno no servidor!",
     *          "code": 500
     *      }
     * }
     */
    public function delete($id)
    {
        try {
            $product = $this->product->find($id);
            if (!$product) return response()->json(ApiError::notFound());
            $product->delete();
            return response()->json(ApiError::success());
        } catch (Exception $e) {
            if (config('app.debug')) {
                return response()->json(ApiError::customizeError($e->getMessage(), 500));
            }
            return response()->json(ApiError::serverError());
        }
    }
}
