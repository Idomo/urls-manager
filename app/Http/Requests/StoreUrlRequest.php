<?php

namespace App\Http\Requests;

use App\Models\Url;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUrlRequest extends FormRequest{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array{
        return [
            'expanded' => ['required', 'string', 'url'],
            'shortened' => ['required', 'string', 'max:255', Rule::unique(Url::class)],
        ];
    }
}
