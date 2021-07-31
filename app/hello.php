<?php

namespace Menaem;

use Carbon\Carbon;

class hello
{
    public function __construct($name)
    {
        echo 'hello, ' . $name . '<br>' . Carbon::now()->toDateTimeString();
    }
}