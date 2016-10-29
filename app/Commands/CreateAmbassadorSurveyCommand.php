<?php namespace App\Commands;

use Mail;
use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class CreateAmbassadorSurveyCommand extends Command implements SelfHandling
{

    private $data;


    public function __construct($data)
    {

        $this->data = $data;

    }

    public function handle()
    {



        Mail::queue('emails.survey.ambassador', $this->data, function($message){
            $message->from('noreply@namiccarolinas.com', 'Survey Form');
            $message->to(['lakeysia.council@charter.com','omar.ferguson@charter.com'])->subject('New Ambassador Survey')->bcc('support@nocturnalinc.com');

        });


    }

}