<?php

namespace Collection;

use Option\Some;
use Option\None;

class Map extends Collection
{
    use Iterator;

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
        $this->values[$key] = $value;
    }

    /**
     * @param string $key
     * @return None|Some
     */
    public function get($key)
    {
        if (array_key_exists($key, $this->values)) {
            return new Some($this->values[$key]);
        }
        return new None();
    }
}
