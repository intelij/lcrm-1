<?php

namespace App\Http\Requests;


class SaleorderRequest extends Request
{
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
            'customer_id' => 'required',
            'date' => 'required|date_format:"'.config('settings.date_format').'"',
            'exp_date' => 'required|date_format:"'.config('settings.date_format').'"',
            'payment_term' => 'required',
            'sales_person_id' => 'required',
            'sales_team_id' => 'required',
            'grand_total' => 'required',
            'total' => 'required',
            'final_price' => 'required',
            'product_id' => 'required',
            'product_id.*' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'product_id.required' => 'A product is required',
            'product_id*.required' => 'A product is required',
        ];
    }
}
