<?php

namespace Option;

class None
{
    public function orElse($value)
    {
        return $value;
    }

    public function __toString()
    {
        return '';
    }
}
