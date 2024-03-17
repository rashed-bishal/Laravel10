<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'category_id' => 'required|integer',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title field is empty',
            'title.max' => 'Maximum title characted exceeded',
            'category_id.required' => 'Category is not selected',
            'category_id.integer' => 'At lease select a category',
            'description.required' => 'Description Field is empty',
        ];
    }
}
