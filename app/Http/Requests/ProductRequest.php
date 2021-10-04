<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|min:3|max:100|unique:products,name',
            'price' => 'required|numeric|min:1'
        ];
    }
    public function messages()
    {
        $rules = [
            'unique' => 'Продукт с таким :attribute уже есть!',
            'required' => 'Поле :attribute обязательное для заполнения!',
            'min' => 'Поле :attribute обязательное должно иметь минимум :min символа',
            'max' => 'Поле :attribute должно быть не более :max символов',
            'numeric' => 'Значение :attribute поля должно быть числом!'
        ];
        return $rules;
    }
}
