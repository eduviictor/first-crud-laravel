<?php

namespace App\Http\Requests\Purchase;

use App\Api\ApiError;
use App\Product;
use Exception;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use LVR\CreditCard\CardCvc;
use LVR\CreditCard\CardNumber;
use LVR\CreditCard\Factory;

class StorePurchase extends FormRequest
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
        $product = Product::find($this->product_id);

        return [
            'product_id' => 'required',
            'quantity_purchased' => 'required|numeric|min:1|max:' . $product->qty_stock,
            'card' => 'required',
            'card.owner' => 'required|string',
            'card.card_number' => ['required', 'string', new CardNumber],
            'card.date_expiration' => ['required', 'string', 'regex:/(0[1-9]|1[0-2])(\/|-)(([0-9]{2}|[0-9]{4})$)/'],
            'card.flag' => 'required|string',
            'card.cvv' => ['required', 'string', new CardCvc($this->card['card_number'])]
        ];
    }

    // Validate flag and date
    public function validateLogic()
    {
        try {
            // Validate Flag if valid
            $factory = Factory::makeFromNumber($this->card['card_number']);

            if (strcasecmp($factory->name(), $this->card['flag']) != 0) {
                throw new HttpResponseException(response()->json(ApiError::dataError(), 400));
            }

            // Check if the date is greater than or equal to today
            $dateToday = strtotime(date('d-m-Y'));
            $date_expiration = strtotime(date_create_from_format('m-y', str_replace('/', '-', $this->card['date_expiration']))->format('d-m-Y'));

            if ($date_expiration < $dateToday) {
                throw new HttpResponseException(response()->json(ApiError::dataError(), 400));
            }
        } catch (Exception $e) {
            throw new HttpResponseException(response()->json(ApiError::dataError(), 400));
        }
    }
}
