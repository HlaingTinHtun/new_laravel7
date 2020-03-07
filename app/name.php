<?php

namespace App;

class Name
{
    public $name;

    /**
     * Name constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function cap()
    {
        return ucfirst($this->name);
    }


}
