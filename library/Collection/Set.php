<?php

namespace Collection;

class Set extends Collection
{
    use Iterator;

    /**
     * @param array|Iterator $values
     */
    public function __construct($values = [])
    {
        foreach ($values as $value) $this->add($value);
    }

    public function add($value)
    {
        if (!in_array($value, $this->values))
        {
            $this->values[] = $value;
        }
    }
}
