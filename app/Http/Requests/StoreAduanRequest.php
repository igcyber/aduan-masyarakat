<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAduanRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'selectedDistrict' => ['required', 'integer'],
            'selectedDistrictName' => ['required', 'string'],
            'selectedVillageName' => ['required', 'string'],
            'isi_aduan' => ['required', 'string'],
            'tags' => ['required', 'array'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg,gif', 'max:2048'],
        ];
    }
}