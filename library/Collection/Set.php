<?php

namespace Collection;

class Set extends Collection
{
    /**
     * @param array|Iterator $values
     */
    public function __construct($values = [])
    {
        foreach ($values as $value) $this->add($value);
    }

    /**
     * @param mixed $value
     * @return Set
     */
    public function add($value)
    {
        if (!$this->has($value))
        {
            $this->addValue($value);
        }
        return $this;
    }
}
