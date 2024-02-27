<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'faculty_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'head' => 'required|string|max:255',
            'contact_email' => 'required|email|max:100',
        ];
    }
}
