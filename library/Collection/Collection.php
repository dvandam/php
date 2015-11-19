<?php

namespace Collection;

abstract class Collection implements \Iterator
{
    use Iterator;

    /**
     * @param $function
     * @return Map
     */
    public function map($function) {
        return new static(array_map($function, $this->values));
    }
}
