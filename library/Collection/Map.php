<?php

namespace Collection;

use Option\Some;
use Option\None;

class Map extends Collection
{
    /**
     * @param array|Iterator $values
     */
    public function __construct($values = [])
    {
        foreach ($values as $key => $value) $this->set($key, $value);
    }

    /**
     * @param string $key
     * @param mixed $value
     */
    public function set($key, $value)
    {
        $this->setValue($key, $value);
    }

    /**
     * @param string $key
     * @return None|Some
     */
    public function get($key)
    {
        return $this->getValue($key);
    }
}
