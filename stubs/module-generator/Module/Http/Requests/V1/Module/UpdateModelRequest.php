<?php

namespace App\Http\Requests\V1\{Module};

use Illuminate\Foundation\Http\FormRequest;

class Update{Model}Request extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required'
        ];
    }
}
