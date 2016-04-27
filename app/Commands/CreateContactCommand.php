<?php namespace App\Commands;

use Mail;
use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class CreateContactCommand extends Command implements SelfHandling
{

    private $data;


    public function __construct($data)
    {

        $this->data = $data;

    }

    public function handle()
    {



        Mail::queue('emails.contacts.main', $this->data, function($message){
            $message->from($this->data['email'], $this->data['name']);
            $message->to('support@nocturnalinc.com')->subject('New Contact Form Message');

        });
        //send thank you/confirmation message back to customer
        Mail::queue('emails.contacts.thank-you', $this->data, function($message){
            $message->from('noreply@namiccarolinas.com', 'Namic Carolinas');
            $message->to($this->data['email'])->subject('Your Message has been received');

        });
    }

}