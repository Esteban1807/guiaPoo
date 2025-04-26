<?php
abstract class Licenses{
    private int $cost;
    private int $duration;
    private string $description;
    public function __construct(int $cost, int $duration, string $description) {
        $this->cost = $cost;
        $this->duration = $duration;
        $this->description = $description;
    }
    public function getCost(): int {
        return $this->cost;
    }
    public function getDuration(): int {
        return $this->duration;
    }
    public function getDescription(): string {
        return $this->description;
    }
    abstract public function calculate(): float;
}
?>