<?php
namespace App\Http\Requests;

class ContactRequest extends Request
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {

        return [
            'contact_category' => 'required',
            'contact_message' => 'required',
            'contact_name' => 'required',
            'contact_email' => 'required|email',



        ];

    }


}
