<?php

use Collection\Map;
use Collection\Set;
use Collection\String;

require_once __DIR__ . "/vendor/autoload.php";

$words = new Set(file('http://lamp.epfl.ch/files/content/sites/lamp/files/teaching/progfun/linuxwords.txt'));

$nav = new Map([
    '2' => new Set(new String("ABC")),
    '3' => new Set(new String("DEF")),
    '4' => new Set(new String("GHI")),
    '5' => new Set(new String("JKL")),
    '6' => new Set(new String("MNO")),
    '7' => new Set(new String("PQRS")),
    '8' => new Set(new String("TUV")),
    '9' => new Set(new String("WXYZ"))
]);

$numbers = new Map();
foreach ($words as $word) {

}
