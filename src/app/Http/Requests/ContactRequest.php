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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string','email', 'max:255'],
            'tel' => ['required', 'numeric', 'digits_between:10,11']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '入力必須です',
            'name.string' => '名前は文字列で入力ください',
            'name.max' => '最大255文字までです',
            'email.required' => '入力必須です',
            'email.string' => '文字列で入力ください',
            'email.email' => 'メール形式で入力ください',
            'email.max' => '最大255文字までです',
            'tel.required' => '電話番号は必須です',
            'tel.numeric' => '数字で入力ください',
            'tel.digits_between'=> '10から11桁のみです'
        ];
    }
}
