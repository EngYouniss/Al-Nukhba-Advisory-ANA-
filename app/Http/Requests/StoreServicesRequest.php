<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServicesRequest extends FormRequest
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
            'title'=>'required|max:255',
            'description'=>'required|max:255',
            'icon'=>'required',
            'status'=>'required'
        ];
    }

    public function messages():array
    {
        return[
            'title.required'=>'هذا الحقل مطلوب',
            'title.max'=>'هذا الحقل اكبر من 255',
            'description.max'=>'هذا الحقل اكبر من 255',
            'description.required'=>'هذا الحقل مطلوب',
        ];
    }
}
