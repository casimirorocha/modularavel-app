<?php

namespace App\Http\Requests\V1\UserMedia;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserMediaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required'
        ];
    }
}
