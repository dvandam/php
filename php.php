<?php

use Collection\Map;
use Collection\Set;
use Collection\String;

require_once __DIR__ . "/vendor/autoload.php";

$words = new Set(file('http://lamp.epfl.ch/files/content/sites/lamp/files/teaching/progfun/linuxwords.txt', FILE_IGNORE_NEW_LINES));
//$words = new Set(["dit", "zijn", "wat", "woorden"]);
$nummer = "34894569289667336";

$nav = new Map([
    '2' => new String("ABC"),
    '3' => new String("DEF"),
    '4' => new String("GHI"),
    '5' => new String("JKL"),
    '6' => new String("MNO"),
    '7' => new String("PQRS"),
    '8' => new String("TUV"),
    '9' => new String("WXYZ")
]);

$numbers = new Map();
foreach ($nav as $number => $string) {
    foreach ($string->orElse([]) as $character) {
        $numbers->set((string)$character, $number);
    }
}

$numberedWords = new Map();
foreach ($words as $word) {
    $key = '';
    $word = $word->orElse('');
    foreach (new String($word) as $char) {
        $key .= $numbers->get(strtoupper($char->orElse('')))->orElse('0');
    }
    $wordsForKey = $numberedWords->get($key)->orElse(new Set());
    $wordsForKey->add($word);
    $numberedWords->set($key, $wordsForKey);
}

var_dump($numberedWords);

//function getWords($left, $right = "") {
//    $result = new Set();
//    for ($i=1; $i<=strlen($left); $i++) {
//        if () continue;
//        foreach(getWords())
//    }
//}
