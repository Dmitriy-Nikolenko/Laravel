<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpsertNewsRequest extends FormRequest
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
            'title'       => ['required', 'max:255'],
            'category_id' => ['required', 'exists:category,id'],
            'photo'       => ['nullable', 'url'],
            'preview'     => ['required'],
            'text'        => ['required'],
            'source_id'   => ['required', 'exists:source,id']
        ];
    }

}
