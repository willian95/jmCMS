<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacancyStoreRequest extends FormRequest
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
            "title" => "required",
            "description" => "required",
            "country" => "required|exists:countries,id",

        ];
    }

    
     public function messages()
    {
        return [
            "title.required" => "Titulo es requerido",
            "description.required" => "Descripción es requerida",
            "country.required" => "País es requerido",
            "country.exists" => "País elegido no es válido"
        ];
    }
}
