<?php

namespace App\Http\Requests\Product;

use App\Api\ApiError;
use Exception;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreProduct extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(ApiError::dataError(), 400));
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'amount' => 'required|regex:/^\d*((\.\d{1,2}))?$/',
            'qty_stock' => 'required|integer',
            'last_sale' => ['string', 'regex:/(^([0-2][0-9]|(3)[0-1])(\/|-)(((0)[0-9])|((1)[0-2]))(\/|-)\d{4}$)/']
        ];
    }

    // Validate date
    public function validateLogic()
    {
        if ($this['last_sale']) {
            try {
                // Check if the date is valid
                $dateToday = strtotime(date('d-m-Y'));
                $lastSale = strtotime(date_create(str_replace('/', '-', $this['last_sale']))->format('d-m-Y'));

                if ($lastSale > $dateToday) {
                    throw new HttpResponseException(response()->json(ApiError::dataError(), 400));
                }
            } catch (Exception $e) {
                throw new HttpResponseException(response()->json(ApiError::dataError(), 400));
            }
        }
    }
}
