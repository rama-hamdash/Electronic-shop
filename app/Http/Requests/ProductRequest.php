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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        'quantity'=>['required'],
        'sold'=>['required'],
        'retreived'=>['required'],
        'sel_price'=>['required'],
        'purshase_price'=>['required'],
        'model_id'=>['required','numeric'],
        'size_id'=>['required' ,'numeric'],
        'color_id'=>['required' ,'numeric'],
        'price'=>['required','numeric','integer'],
        // 'category_id'=>['required','numeric'],
        'image_url'=>['required','image'],
        ];
    }
}
