<?php

namespace mammals;
class Mammals {
    protected $animals = ["Cow", "Sheep", "Goat"];

    function __construct(){
        var_dump($this->animals);
    }
}

namespace marine_mammals;
class Mammals {
    protected $marine_animals = ["Wairus", "Killer Whale", "Beluga Whale"];

    function __construct(){
        var_dump($this->marine_animals);
    }
}

$mammals1 = new \mammals\Mammals();
echo "<br />";
$mammals2 = new \marine_mammals\Mammals();

?>