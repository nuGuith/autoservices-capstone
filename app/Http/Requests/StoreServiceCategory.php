<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceCategory extends FormRequest
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
            'ServiceCategoryName' => 'regex:/^[^~`!@#*_={}|\;<>,.?]+$/|required|max:100|unique:ServiceCategoryName',
            'Description' => 'bail|nullable|max:255',
        ];
    }
}
