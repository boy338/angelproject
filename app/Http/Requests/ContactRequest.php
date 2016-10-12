<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'title' => 'bail|required|max:50',
            'name' => 'bail|required|max:255',
            'email' => 'bail|required|email',
            'tel' => 'bail|required|digits:10',
            'message' => 'bail|required|max:1000'
        ];
    }

	/**
	 * Get the error messages for the defined validation rules.
	 *
	 * @return array
	 */
	public function messages()
	{
		$required_prefix = 'กรุณาป้อน';
		$max_prefix = 'ต้องไม่เกิน ';
		return [
			// required
			'name.required' => $required_prefix.' ชื่อ-นามสกุล',
			'email.required'  => $required_prefix.' อีเมล์',
			'tel.required'  => $required_prefix.' หมายเลขโทรศัพท์',
			'message.required'  => $required_prefix.' ข้อความ',
			
			// max
			'name.max'  => $max_prefix.' 255 ตัวอักษร',
			'tel.max'  => $max_prefix.' 10 ตัวอักษร',
			'message.max'  => $max_prefix.' 1000 ตัวอักษร',
			
			// email
			'email.email'  => 'ต้องเป็นรูปแบบของ email',

			// digits
			'tel.digits' => 'หมายเลขโทรศัพท์ ต้องเป็นตัวเลข 10 หลัก',
		];
	}	
}
