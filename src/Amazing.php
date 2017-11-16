<?php

namespace App;

class Amazing
{
    protected $name;

    public function name($name)
    {
        $this->name = $name;

        return $this;
    }

    public function greet()
    {
        return "Hello {$this->name}";
    }
}
