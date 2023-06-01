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

    public function messages()
    {
        return [
            'title.required' => 'E` obbligatorio inserire un titolo',
            'title.min' => 'La lunghezza del titolo deve essere maggiore di 5 caratteri',
            'title.max' => 'La lunghezza del titolo deve essere minore di 100 caratteri',
            'type.min' => 'La lunghezza del tipo deve essere maggiore di 5 caratteri',
            'type.max' => 'La lunghezza del Tipo deve essere minore di 50 caratteri',
            'thumb.min' => 'La lunghezza del link immagine deve essere maggiore di 5 caratteri',
            'thumb.required' => 'E` obbligatorio inserire un link per l`immagine',
            'price.required' => 'E` obbligatorio inserire un prezzo',
            'price.numeric' => 'Devi inserire nel campo prezzo un numero',


        ];
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
