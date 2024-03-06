<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileHandleRequest extends FormRequest
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
            'myFile' => 'required|min:4|max:80|mimes:jpg,jpeg,png,bmp,gif',
        ];
    }

    public function messages()
    {
        return [
            'myFile.required' => 'Cannot Upload while file is missing!',
            'myFile.min' => 'File size is too small',
            'myFile.max' => 'File size is too large',
            'myFile.mimes' => 'File format is not supported',
        ];
    }
}
