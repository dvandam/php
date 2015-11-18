<?php

class Map
{
    private $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function get($key)
    {
        if (array_key_exists($key, $this->data)) {
            return new Some($this->data[$key]);
        }
        return new None();
    }
}
