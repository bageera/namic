<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogEventListener
{
/**
* Create the event listener.
*
* @return void
*/
public function __construct()
{
//
}

/**
* Handle the event.
*
* @param  DeployDisabledEvent  $event
* @return void
*/
public function handle($event)
{
    //if ($event->type == 'error') {
    //$this->notifyViaSlack($event->message, $event->context);
    //    }
}

/**
* Send Slack notification.
*
* @param  string  $message
* @param  string  $context
* @return void
*/
protected function notifyViaSlack($message, $context)
    {
    /*
    * Slack notification logic
    */
    }
}