<?php

namespace App\Http\Requests;

use App\Rules\NoRestrictredWords;
use Illuminate\Foundation\Http\FormRequest;

class CreateTaskRequest extends FormRequest
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
            'name' => 'required|string|min:3',
            'description' => ['nullable' ,'string', 'max:500', new NoRestrictredWords()],
            'category_id' => 'required|exists:categories,id',
            'due_date' => 'required|date|after_or_equal:today'
        ];
    }
}
