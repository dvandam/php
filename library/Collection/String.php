<?php

namespace Collection;

class String extends Collection
{
    /**
     * @param string $string
     */
    public function __construct($string)
    {
        foreach(str_split($string) as $character) parent::addValue($character);
    }

    public function __toString()
    {
        return join('', $this->getValues());
    }
}
