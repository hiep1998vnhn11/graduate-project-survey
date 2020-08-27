<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GraduateRequest extends FormRequest
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
            'Q1' => 'require',
            'Q2' => 'require',
            'Q3'=> 'require',
            'Q4'=> 'require',
            'Q5'=> 'require|string|max:1000',
            'Q6'=> 'require|string|max:1000',
            'Q7'=> 'require|string|max:1000',
            'Q8'=> 'require|string|max:1000'
        ];
    }
}
