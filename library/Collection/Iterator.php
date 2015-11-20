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

    public function join($glue = '')
    {
        return array_reduce($this->values, function(String $result, $element) use ($glue) {
            if ($result->length() > 0) {
                $result->add($glue);
            }
            $result->add((string)$element);
        }, new String());
    }

    public function length() {
        return count($this->values);
    }

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
     * @return mixed
     */
    public function current()
    {
        return current($this->values);
    }

    /**
     * @return mixed
     */
    public function key()
    {
        return key($this->values);
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
