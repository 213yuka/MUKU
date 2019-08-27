<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEvaluation extends FormRequest
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
            'date' => 'required|unique:evaluations,date|date|before_or_equal:today',
            'evaluation' => 'required|integer|max:100',
        ];
    }

    public function attributes()
    {
        return [
            'date' => '日にち',
            'evaluation' => '点数',
        ];
    }

    public function messages()
    {
        return [
            'date.before_or_equal' => ':attribute には今日以前の日付を入力してください。',
            'unique'  => ':attribute にはすでに点数が入力されています',
        ];
    }
}
