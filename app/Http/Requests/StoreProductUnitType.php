<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductUnitType extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'UnitTypeName' => 'regex:/^[^~`!@#*_={}|\;<>,.?]+$/|required|max:50|unique:ProductUnitType',
            'Unit' => 'regex:/^[^~`!@#*_={}|\;<>,.?]+$/|required|max:6|unique:ProductUnitType',
            'UnitCategory' => 'required'
        ];
    }
}
