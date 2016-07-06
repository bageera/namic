<?php namespace App\Commands;

use Mail;
use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class CreateNominationCommand extends Command implements SelfHandling
{

    private $data;


    public function __construct($data)
    {

        $this->data = $data;

    }

    public function handle()
    {


        Mail::queue('emails.epic.form', $this->data, function($message){
            $message->from('noreply@namiccarolinas.com', 'Contact Form');
            $message->to('jon@nocturnalinc.com')->subject('New EPIC Submission Form Message');

        });
        //send thank you/confirmation message back to customer
        Mail::queue('emails.epic.thank-you', $this->data, function($message){
            $message->from('noreply@namiccarolinas.com', 'Namic Carolinas');
            $message->to($this->data['email'])->subject('Your Message has been received');

        });
    }

}