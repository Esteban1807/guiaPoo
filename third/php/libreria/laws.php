<?php
class Laws{
    private string $name;
    private float $force;
    private string $description;
    public function __construct(string $name, float $force , string $description) {
        $this->name = $name;
        $this->force = $force;
        $this->description = $description;
    }
    public function getName(): string {
        return $this->name;
    }
    public function getForce(): float {
        return $this->force;
    }
    public function getDescription(): string {
        return $this->description;
    }
    public function calculate(): mixed {
        return $this->calculate();
    }
}
?>