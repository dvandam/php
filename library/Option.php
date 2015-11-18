<?php

abstract class Option
{
    abstract public function orElse($value);
}

class Some
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function orElse($value)
    {
        return $this->value;
    }
}

class None
{
    public function orElse($value)
    {
        return $value;
    }
}
