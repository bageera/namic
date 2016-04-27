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

            'message' => 'required',
            'name' => 'required',
            'email' => 'required|email',



        ];

    }


}
