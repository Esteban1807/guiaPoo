<?php

class Basic extends Plan{

    public function __construct(string $name, int $cost, string $service) {
        parent::__construct("Basic", 10000, "General access.");
    }
}

?>
