<?php

namespace Collection;

use Option\Some;
use Option\None;

trait Iterator
{
    /**
     * @var array
     */
    protected $values;

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
}
