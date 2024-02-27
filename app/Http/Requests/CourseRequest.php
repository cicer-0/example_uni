<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'credit_hours' => 'required|integer',
            'level' => 'required|string|max:50',
            'department_id' => 'required|integer',
        ];
    }
}
