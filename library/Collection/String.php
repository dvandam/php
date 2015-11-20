<?php

namespace Collection;

class String extends Collection
{
    /**
     * @param string $string
     */
    public function __construct($string = '')
    {
        foreach(str_split($string) as $character) parent::addValue($character);
    }

    public function __toString()
    {
        return join('', $this->getValues());
    }

    /**
     * @param $string
     * @return String
     */
    public function add($string)
    {
        return new self((string)$this . $string);
    }

    /**
     * @param $function
     * @return String
     */
    public function map($function)
    {
        return new self(join('', array_map($function, $this->getValues())));
    }
}
