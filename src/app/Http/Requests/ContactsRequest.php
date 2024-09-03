<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
         'first-name' => ['required', 'string', 'max:255'],
         'last-name' => ['required', 'string', 'max:255'],
         'gender' => ['required', 'integer', 'max:3'],
         'email' => ['required', 'string', 'email', 'max:255'],
         'tell' => ['required', 'numeric', 'max:5'],
         'address' => ['required', 'string', 'max:255'],
         'category' => ['required', 'string', 'max:255'],
         'detail' => ['required', 'text', 'max:120'],

        ];
    }

    public function messages()
    {
        return [
            'first-name.required' => '姓を入力してください',
            'last-name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tell.required' => '電話番号を入力してください',
            'tell.max' => '電話番号は５桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'category.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせの内容を入力してください',
            'detail.max' => 'お問い合わせの内容は120文字以内で入力してください',
        ];
    }
}
