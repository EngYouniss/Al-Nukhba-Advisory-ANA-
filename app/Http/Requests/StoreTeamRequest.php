<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'position' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png', // ✅ التحقق من الصورة
            'social_media' => 'array',
            'social_media.*' => 'nullable|url', // ✅ كل عنصر يكون رابط صحيح
        ];
    }
}
