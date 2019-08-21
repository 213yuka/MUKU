<?php

namespace App\Http\Requests;

use App\Folder;
use Illuminate\Validation\Rule;

class EditFolder extends CreateFolder
{


    public function rules()
    {
        $rule = parent::rules();

        return $rule;
    }

    public function messages()
    {
        $messages = parent::messages();

        return $messages;
    }

}
