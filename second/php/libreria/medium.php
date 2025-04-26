<?php

class Medium extends Plan{

    public function __construct(string $name, int $cost, string $service) {
        parent::__construct("Medium", 150000, "Includes directed classes.");
    }
}

?>