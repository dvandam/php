<?php

namespace Collection;

use Option\Some;
use Option\None;

trait Iterator
{
    /**
     * @var array
     */
    private $values = [];

    /**
     * @param mixed $value
     * @return boolean
     */
    protected function has($value)
    {
        return in_array($value, $this->values);
    }

    /**
     * @param mixed $value
     */
    protected function addValue($value)
    {
        $this->values[] = $value;
    }

    /**
     * @param string $key
     * @param mixed $value
     */
    protected function setValue($key, $value)
    {
        $this->values[$key] = $value;
    }

    /**
     * @param $key
     * @return None|Some
     */
    protected function getValue($key) {
        if (array_key_exists($key, $this->values)) {
            return new Some($this->values[$key]);
        }
        return new None;
    }

    /**
     * @return None|Some
     */
    public function current()
    {
        if ($this->valid()) {
            return new Some(current($this->values));
        }
        return new None;
    }

    /**
     * @return None|Some
     */
    public function key()
    {
        if ($this->valid()) {
            return new Some(key($this->values));
        }
        return new None;
    }

    public function next()
    {
        next($this->values);
    }

    public function rewind()
    {
        reset($this->values);
    }

    /**
     * @return boolean
     */
    public function valid()
    {
        return isset($this->values[key($this->values)]);
    }

    /**
     * @return array
     */
    protected function getValues()
    {
        return $this->values;
    }
}
