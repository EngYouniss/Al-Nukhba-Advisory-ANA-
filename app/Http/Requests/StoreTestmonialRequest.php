<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestmonialRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'position' => ['nullable', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1000'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'status' => ['required', 'boolean'],
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'الاسم مطلوب.',
            'description.required' => 'الوصف مطلوب.',
            'image.image' => 'الملف المرفق يجب أن يكون صورة.',
            'image.max' => 'حجم الصورة لا يجب أن يتجاوز 2 ميجابايت.',
        ];
    }
}
