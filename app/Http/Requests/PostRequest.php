<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'image' => 'required|max:2024|image',
            'title' => 'required|max:255',
            'category_id' => 'required|integer',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'An image file is required',
            'image.max' => 'Maximum file size exceeded',
            'image.image' => 'The file must be an image file',
            'title.required' => 'Title field is empty',
            'title.max' => 'Maximum title characted exceeded',
            'category_id.required' => 'Category is not selected',
            'category_id.integer' => 'At lease select a category',
            'description.required' => 'Description Field is empty',
        ];
    }
}
