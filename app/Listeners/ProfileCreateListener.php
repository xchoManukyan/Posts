<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Profile;

class ProfileCreateListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {   
        Profile::create([
            'first_name' => '',
            'last_name' => '',
            'gender' => '',
            'birth_date' => '',
            'phone'=>'',
            'adress'=>'',
            'about'=>'',
            'user_id'=>$event->user->id
        ]);
    }
}
