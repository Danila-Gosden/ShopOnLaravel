<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $rules = [
            'name' => 'required|min:3|max:100|unique:categories,name',
            'alias' => 'required|min:3|max:100|unique:categories,alias'
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            'unique' => 'Продукт с таким :attribute уже есть!',
            'required' => 'Поле :attribute обязательное для заполнения!',
            'min' => 'Поле :attribute обязательное должно иметь минимум :min символа',
            'max' => 'Поле :attribute должно быть не более :max символов'
        ];
    }
}
