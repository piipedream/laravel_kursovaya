<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'title' => 'required|min:5|max:50',
          'author' => 'required|min:5|max:50',
          'description' => 'required|min:15|max:800',
          'genre' => 'required|min:5|max:50',
          'country' => 'required|min:5|max:50',
          'pages' => 'required',
          'price' => 'required|min:5|max:150',
          'Image' => 'required|mimes:png,jpg,jpeg,bmp|max:10240'
        ];
    }
}
