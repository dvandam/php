<?php

namespace Option;

class Some
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function orElse()
    {
        return $this->value;
    }

    public function __toString()
    {
        return (string)$this->value;
    }
}
