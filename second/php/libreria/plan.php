<?php

abstract class Plan{
    private string $name;
    private int $cost;
    private string $service;
    public function __construct(string $name, int $cost, string $service) {
        $this->name = $name;
        $this->cost = $cost;
        $this->service = $service;
    }
    public function getName(): string {
        return $this->name;
    }
    public function getCost(): int {
        return $this->cost;
    }
    public function getService(): string {
        return $this->service;
    }
}

?>