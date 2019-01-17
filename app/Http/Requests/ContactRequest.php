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
            'name'                  => 'required|string|max:60',
            'phone'                 => 'required|string|max:20',
            'message'               => 'required|string',
            'g-recaptcha-response'  => 'recaptcha'
        ];
    }

    public function attributes()
    {
        return [
            'phone' => 'شماره تماس',
            'message' => 'پیام',
        ];
    }
}
