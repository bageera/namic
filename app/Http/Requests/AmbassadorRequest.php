<?php
namespace App\Http\Requests;

class AmbassadorRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'desc_join.required' => 'Please indicate why you would like to join',
            'get_involved.required'  =>  'Please indicate your best attributes',
            'are_you_involved.required'  =>  'Pick a reason you want to get involved',
            'desc_involved.required'    =>  'Are you involved in any organizations',
            'desc_time_available.required'  =>  'Indicate How much time you have available',
            'desc_gain.required'    =>  'Please indicate what you intend to gain',
            'leadership_support.required'   =>  'Indicate  if your leadership would support your involvement',
            'social_media.required' =>  'Indicate what social media you use',
            'open_feedback.required'    =>  'Please indicate how open you would be to feedback'




        ];
    }


    public function rules()
    {

        return [
            'name'  => 'required',
            'email' =>  'required|email',
            'desc_join' => 'required',
            'get_involved' => 'required',
            'are_you_involved' => 'required',
            'desc_involved' =>  'required',
            'desc_time_available' => 'required',
            'desc_gain' =>  'required',
            'leadership_support'    =>  'required',
            'social_media'  =>  'required',
            'open_feedback' =>  'required'


        ];

    }


}
