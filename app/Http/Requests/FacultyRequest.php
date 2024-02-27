<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacultyRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'university_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'dean_name' => 'required|string|max:255',
            'contact_email' => 'required|email|max:100',
        ];
    }
}
