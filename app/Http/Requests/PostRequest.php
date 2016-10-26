<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        $id = $this->blog ? ',' . $this->blog : '';
        return [
            'title' => 'bail|required|max:255',
            'summary' => 'bail|required|max:65000',
            'content' => 'bail|required|max:65000',
            'slug' => 'bail|required|max:255|unique:posts,slug' . $id,
            'tags' => ['regex:/^[A-Za-z0-9ก-ฮ, ]{1,50}?(,[A-Za-z0-9ก-ฮ, ]{1,50})*$/'],
        ];
    }
}
