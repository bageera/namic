<?php namespace App\Commands;

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


        return true;
    }

}