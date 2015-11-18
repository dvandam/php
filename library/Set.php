<?php

class Set
{
    /**
     * @var array
     */
    private $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function add($value)
    {
        if (!in_array($value, $this->data))
        {
            $this->data[] = $value;
        }
    }

    // iterate methods trait?
}
