<?php

namespace Collection;

class String extends Collection
{
    use Iterator;

    /**
     * @param string $string
     */
    public function __construct($string)
    {
        $this->values = str_split($string);
    }
}
