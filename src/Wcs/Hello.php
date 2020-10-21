<?php

namespace App\Wcs;

class hello {
    private $talk = 'Hello World';

    public function getTalk(): string
    {
        return $this->talk;
    }

}