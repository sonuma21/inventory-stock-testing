<?php

namespace App\Http\Requests;

use App\Data\ProductData;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
         'name' => ['required', 'string', 'max:50'],
         'quantity' => ['required', 'integer', 'min:0'],
         'low_stock_threshold' => ['required', 'integer', 'min:10']
        ];
    }

    public function toData() : ProductData
    {
        return new ProductData(
            name: $this->input('name'),
            quantity: $this->input('quantity'),
            low_stock_threshold: $this->input('low_stock_threshold')
        );
    }
}
