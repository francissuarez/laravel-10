<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [


//            'email' => ['required','unique:posts','max:255'],
//            'email'=>'required|email|unique:students|max:20',
        'email' => ['required','email','unique:students','max:20'],
            'name' => 'required|max:12',
            'address' => 'required|max:255',
            'mobile' => 'required|max:255',


        ];
    }
}
