<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UniversityRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:100',
            'founding_year' => 'required|integer',
            'motto' => 'required|string|max:255',
            'website' => 'nullable|string|max:255',
            'contact_email' => 'required|email|max:100',
        ];
    }
}
