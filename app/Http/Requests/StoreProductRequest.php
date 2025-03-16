<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Разрешаем выполнение запроса всем пользователям
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'body'  => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Title is required!',
            'title.string'   => 'Title must be a string!',
            'title.max'      => 'Title may not be greater than 255 characters!',
            'body.required'  => 'Body is required!',
            'body.string'    => 'Body must be a string!',
            'image.image'    => 'Please upload a valid image file!',
            'image.mimes'    => 'Image must be a file of type: jpeg, png, jpg, gif!',
            'image.max'      => 'Image must not be greater than 2048 kilobytes!',
        ];
    }
}
