<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|min:5|max:100',
            'type' => 'nullable|min:5|max:50',
            'description' => 'nullable',
            'thumb' => 'required|nullable|min:5',
            'price' => 'required|numeric',
            'sale_date' => 'nullable'
        ];
    }
}
