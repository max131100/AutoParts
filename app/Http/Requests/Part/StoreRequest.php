<?php

namespace App\Http\Requests\Part;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'description' => 'string',
            'article' => 'required|string',
            'manufacturer_id' => 'required|integer',
            'price' => 'required',
            'qty_on_hand' => 'required|integer',
            'category_id' => 'required|integer',
            'compatible_cars' => 'required',
        ];
    }
}
