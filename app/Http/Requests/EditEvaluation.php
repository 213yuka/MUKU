<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditEvaluation extends FormRequest
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


    public function rules()
    {
        return [
            'evaluation' => 'required|integer|max:100',
        ];
    }

    public function attributes()
    {
        return [
            'evaluation' => '点数',
        ];
    }

}
