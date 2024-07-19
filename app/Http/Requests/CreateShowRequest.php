<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateShowRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'image' => ['required', 'image'],
            'description' => ['required', 'string'],
            'type' => ['required', 'string'],
            'studios' => ['required', 'string'],
            'date_aired' => ['required', 'string'],
            'status' => ['required', 'string'],
            'genre' => ['required', 'string'],
            'duration' => ['required', 'string'],
            'quality' => ['required', 'string'],
        ];
    }
}
