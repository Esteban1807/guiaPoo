<?php

class Premium extends Plan{

    public function __construct(string $name, int $cost, string $service) {
        parent::__construct("Premium", 200000, "Includes personal trainer and wet are.");
    }
}

?>