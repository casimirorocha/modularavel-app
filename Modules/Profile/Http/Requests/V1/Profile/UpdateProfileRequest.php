<?php

namespace App\Http\Requests\V1\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required'
        ];
    }
}
