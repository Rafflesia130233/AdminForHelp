<?php

namespace App\Events;

abstract class Event
{
    //

}
Tracker::trackEvent(['event' => 'cart.add']);
Tracker::trackEvent(['event' => 'cart.add', 'object' => 'App\Cart\Events\Add']);