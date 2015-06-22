<?php
namespace App\Http\Requests;

class CreateNomination extends Request
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {

        return [
            'nominee_award' => 'required',
            'nominee_name' => 'required',
            'nominee_address' => 'required',
            'nominee_email' => 'required|email',
            'nominee_phone' => 'required',
            'nominee_reason' => 'required',

            'nominator_name' => 'required',
            'nominator_address' => 'required',
            'nominator_email' => 'required|email',
            'nominator_phone' => 'required',


        ];

    }


}
