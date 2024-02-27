<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacultyCourseRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'faculty_id' => 'required|integer',
            'course_id' => 'required|integer',
        ];
    }
}
