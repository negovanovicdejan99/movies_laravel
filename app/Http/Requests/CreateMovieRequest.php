<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|unique:movies',
            'genre' => 'required|string|',
            'director' => 'required|string|max:50',
            'year_of_publishing' => 'required|integer|between:1900, 2020',
            'storyline' => 'required|string|max:1000',
        ];
    }
}
