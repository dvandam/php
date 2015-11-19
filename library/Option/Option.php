<?php

namespace Option;

abstract class Option
{
    abstract public function orElse($value);

    abstract public function __toString();
}
