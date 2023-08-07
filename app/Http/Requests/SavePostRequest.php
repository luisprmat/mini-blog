<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:4'],
            'category_id' => ['required', 'exists:categories,id'],
            'body' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'category_id.required' => __('You must select a category'),
            'category_id.exists' => __('The selected category doesn\'t exist in our system'),
        ];
    }
}
